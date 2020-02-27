<?php wp_head(); ?>

<?php get_header(); ?>
<?php wp_nav_menu(array(
    'theme_location' => 'header_menu',
    'container' => null,
    'menu_class' => 'menu'
)); ?>

<section class="content contacts">
    <div class="container">

        <ul class="main-ul">
            <li class="hover"><a href="<?php home_url();?>">Главная</a></li>
            <li class="hover"><a href="<?php home_url();?>/about">О компании</a></li>
            <li class="hover"><a href="#">Список основных продуктов компании</a></li>
            <li class="dropdown-hover">
                <a href="<?php home_url();?>/all-services" class="all-services">Виды услуг</a>
                    <ul class="daughter-ul">
                        <li class="hover"><a href="<?php home_url();?>/consulting">консалтинг</a></li>
                        <li class="hover"> <a href="<?php home_url();?>/building">
                            проектирование,
                            строительство,
                            реконструкция,
                            электромонтажные работы,
                            инжиниринговая деятельность</a></li>
                        <li class="hover"><a href="<?php home_url();?>/vehicle-production">
                            производство транспортных средств,
                            инжиниринговая деятельность
                        </a></li>
                        <li class="hover"><a href="<?php home_url();?>/IT">
                            IT технологии,
                            автоматизация производства,
                            инжиниринговая деятельность
                        </a></li>
                        <li class="hover"><a href="<?php home_url();?>/science">научно-исследовательская деятельность</a></li>
                        <li class="hover"><a href="<?php home_url();?>/geology">инженерно-геологические изыскания</a></li>
                    </ul>
            </li>
            <li class="hover"><a href="<?php home_url();?>/media">Фото и видео, Youtube канал.</a></li>
            <li class="hover"><a href="<?php home_url();?>/contacts">Контакты</a></li>
            <li class="hover"><a href="<?php home_url();?>/sitecard">Карта сайта</a></li>
        </ul>
    </div>
    
</section>

<?php get_footer(); ?>
<?php wp_footer(); ?>