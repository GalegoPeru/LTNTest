
#!/bin/bash

. $(dirname $0)/common_functions.sh

#Obtener el id de la instancia actual
INSTANCE_ID=$(get_instance_id)
if [ $? != 0 -o -z "$INSTANCE_ID" ]; then
error_exit "Unable to get this instance's ID; cannot continue."
fi

#Validar en que ELB se encuentra la instancia actual
mkdir -p /mnt/latina

asg=$(autoscaling_group_name $INSTANCE_ID)
if [ $? == 0 -a -n "$asg" ]; then
    msg "Found AutoScaling group for instance $INSTANCE_ID: $asg"
    if [ $asg == "LATINA_WFE" ]; then
        #PRD
        msg "Instancia pertenece a PRD"

        #Montar Gluster
        if grep -qs '/mnt/latina' /proc/mounts; then
            echo "EFS is mounted"
        else
            mount -t nfs4 -o vers=4.1 $(curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone).fs-13e8b993.efs.us-east-1.amazonaws.com:/latina    /mnt/latina
        fi
    elif  [ $asg == "QAS_LATINA_WFE" ]; then
        #QA
        msg "Instancia pertenece a QA"
        #Montar EFS
        if grep -qs '/mnt/latina' /proc/mounts; then
            echo "EFS is mounted"
        else
            mount -t nfs4 -o vers=4.1 $(curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone).fs-c4e8b944.efs.us-east-1.amazonaws.com:/latina    /mnt/latina
        fi
    else
        error_exit "Instancia no se encuentra en ASG PRD o QA"
    fi
else
    error_exit "Instancia no es parte de ASG"
fi

#COPIAR ARCHIVOS PARA SSL
if [ ! -f /etc/pki/tls/latina.pe/latina.pe.crt ]; then
    mkdir /etc/pki/tls/latina.pe
    cp /mnt/latina/certs/latina.pe.crt  /etc/pki/tls/latina.pe/latina.pe.crt -f
	cp /mnt/latina/certs/latina.pe.key  /etc/pki/tls/latina.pe/latina.pe.key -f
	cp /mnt/latina/certs/chain-latina.pe.crt  /etc/pki/tls/latina.pe/chain-latina.pe.crt -f

fi

#Copiar configuración de VirtualHost
if [ ! -f /etc/nginx/conf.d/ngx_vhost.conf ]; then
cp /mnt/latina/config/ngx_vhost.conf  /etc/nginx/conf.d/ -f

service nginx restart
fi

# Copy hosts
cp -f /mnt/latina/config/hosts /etc/hosts

#COPIAR ARCHIVO SSL
if [ ! -f /etc/nginx/conf.d/ngx_latina_ssl.conf ]; then
    cp /mnt/latina/config/ngx_latina_ssl.conf /etc/nginx/conf.d/ngx_latina_ssl.conf -f
fi

#Copiar configuración Pagespeed
cp /mnt/latina/config/.ngx_pagespeed /etc/nginx/conf.d/ -f

#Copiar configuración Headers
cp /mnt/latina/config/.ngx_headers /etc/nginx/conf.d/ -f

#Copiar configuracion php fpm
cp /mnt/latina/config/www.conf /etc/php/7.0/fpm/pool.d/www.conf
cp /mnt/latina/config/php.ini /etc/php/7.0/fpm/php.ini

#Configuración parámetros nginx
cp /mnt/latina/config/nginxcore.conf /etc/nginx/nginx.conf

#Troubleshooting de memoria a cloudwatch
rm /var/tmp/aws-mon/$INSTANCE_ID

service nginx restart
service php7.0-fpm restart
