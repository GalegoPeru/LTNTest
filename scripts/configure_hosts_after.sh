#!/usr/bin/env bash

###############################################
# Copy configuration files
###############################################
cp /mnt/latina/site/wp-config.php /var/www/html/latina/wp-config.php -f
#cp /mnt/latina/site/.redirects /var/www/html/latina/.redirects -f
#cp /mnt/latina/site/nginx.conf /var/www/html/latina/nginx.conf -f
#cp /mnt/latina/site/robots.txt /var/www/html/latina/robots.txt -f

###############################################
# Copy Total Cache files
###############################################
#cp -f /mnt/latina/site/w3tc/advanced-cache.php /var/www/html/latina/wp-content
#cp -f /mnt/latina/site/w3tc/db.php /var/www/html/latina/wp-content
#cp -f /mnt/latina/site/w3tc/object-cache.php /var/www/html/latina/wp-content
#cp -rf /mnt/latina/site/w3tc/w3tc-config /var/www/html/latina/wp-content
if [ ! -L /var/www/html/latina/wp-content/cache ]; then
    ln -s  /mnt/latina/site/cache /var/www/html/latina/wp-content/cache
fi

###############################################
# Symbolic links to EFS folders
###############################################
# Uploads
if [ ! -L /var/www/html/latina/wp-content/uploads ]; then
    ln -s  /mnt/latina/site/uploads /var/www/html/latina/wp-content/uploads
fi

chgrp -R www-data /var/www/html/latina*
chown -R www-data /var/www/html/latina*
find /var/www/html/latina -type d -exec chmod 755 {} \;
find /var/www/html/latina -type f -exec chmod 644 {} \;

chgrp -R www-data /mnt/latina/config/ngx_pagespeed_cache
chown -R www-data /mnt/latina/config/ngx_pagespeed_cache

touch /var/www/html/index.html

################################################
# Flush PageSpeed Cache
################################################
touch /mnt/latina/config/ngx_pagespeed_cache/cache.flush

service nginx restart
service php7.0-fpm restart
