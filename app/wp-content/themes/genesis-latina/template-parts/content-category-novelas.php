<style>
    body{
        background-color:black;
    }
.title-lisado span{
    font-size:20px;
    display:inline-block;
    margin-top:20px;
    margin-bottom:15px;

    color:#EC0475!important;
    font-weight: 900;
    font-size: 24px;
    line-height: 28px;


}
.listado-novelas {
    display:flex;
    flex-wrap:wrap;
    justify-content:space-evenly;
}
.info-item-novela{
    background-color:black;
    padding:10px 16px;
}
.info-item-novela .text-1{
    display:block;
    color:white;
    margin-top:5px;
    font-size:18px;
}
.info-item-novela .text-2{
    display:block;
    color:white;
    margin-top:10px;
    font-size:14px;
}
.box-item-listado{
    margin-bottom:10px
}
@media (max-width:1024px){
    .listado-novelas{
        width:100%;
        padding-left:10px;
        padding-right:10px;
    }
    .listado-novelas .box-item-listado{
        width:30%;
    }
    .listado-novelas .box-item-listado img{
        width:100%;
    }
    .title-lisado{
        padding-left:10px;
    }
}
@media (max-width:460px){
    
    .listado-novelas .box-item-listado{
        width:90%;
        margin-bottom:10px;
        margin-left:5%;
    }
    
}
</style>
<div class="container">

<div class="title-lisado">
    <span>Nuestra novelas</span>
</div>
<div class="listado-novelas">

        <?php if( have_rows('item_novela', 'option') ): ?>

    

        <?php while( have_rows('item_novela', 'option') ): the_row(); ?>

          
            <div class="box-item-listado">
                <a href="<?php echo get_sub_field('link_destino'); ?>">
                <img src="<?php echo get_sub_field('foto'); ?>" alt="">
                <div class="info-item-novela">
                    <span class="text-1"><?php echo get_sub_field('titulo'); ?></span>
                    <span class="text-2"><?php echo get_sub_field('sub_tiutlo'); ?></span>
                </div>
                </a>
            </div>

        <?php endwhile; ?>

     

        <?php endif; ?>
    <!--<div class="box-item-listado">
        <a href="https://wordpress-150511-986519.cloudwaysapps.com/novelas/guerra-de-rosas/">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/nov_guerrar.png" alt="">
        <div class="info-item-novela">
            <span class="text-1">Guerra de Rosas</span>
            <span class="text-2">Novelas</span>
        </div>
        </a>
    </div>
    <div class="box-item-listado">
        <a href="https://wordpress-150511-986519.cloudwaysapps.com/novelas/jesus/">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/jesus.png" alt="">
        <div class="info-item-novela">
            <span class="text-1">Jesús</span>
            <span class="text-2">Novelas</span>
        </div>
        </a>
    </div>
    <div class="box-item-listado">
        <a href="https://wordpress-150511-986519.cloudwaysapps.com/novelas/betty-en-ny/">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/nov_betty.png" alt="">
        <div class="info-item-novela">
            <span class="text-1">Betty en NY</span>
            <span class="text-2">Novelas</span>
        </div>
        </a>
    </div>-->
    
</div>

</div>