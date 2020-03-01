<?php wp_head(); ?>

<?php get_header(); ?>
<?php wp_nav_menu(array(
    'theme_location' => 'header_menu',
    'container' => null,
    'menu_class' => 'menu'
)); ?>
<section class="slider all-services">
    <div class="container" style="padding-bottom: 0px;">
        <div class="swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/consulting" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/consalting.webp')">
                        <h2>КОНСАЛТИНГ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/building" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/building.webp')">
                        <h2>ПРОЕКТИРОВАНИЕ, СТРОИТЕЛЬСТВО, РЕКОНСТРУКЦИЯ, ЭЛЕКТРОМОНТАЖНЫЕ РАБОТЫ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item"  href="<?php home_url()?>/vehicle-production" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/vaz.webp')">
                        <h2>ПРОИЗВОДСТВО ТРАНСПОРТНЫХ СРЕДСТВ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/IT" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/it.webp')">
                        <h2>IT-ТЕХНОЛОГИИ, АВТОМАТИЗАЦИЯ ПРОИЗВОДСТВА, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/science" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/kafedra.webp')">
                        <h2>НАУЧНО-ИССЛЕДОВАТЕЛЬСКАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/geology" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/geology.webp')">
                        <h2>ИНЖЕНЕРНО-ГЕОЛОГИЧЕСКИЕ ИЗЫСКАНИЯ</h2>
                    </a>
                </div> 
            </div>  
        </div>
    </div>
</section>

<section class="content">
    <div class="container" style="padding-top: 25px;">
        <div class="c-left">
            <div class="c-main">
                <div class="services">
                    <a class="service" href="<?php home_url();?>/consulting" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/consalting.webp')">
                        <p>КОНСАЛТИНГ</p>
                    </a>
                    <a class="service" href="<?php home_url();?>/building" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/building.webp')">
                        <p>ПРОЕКТИРОВАНИЕ, СТРОИТЕЛЬСТВО, РЕКОНСТРУКЦИЯ, ЭЛЕКТРОМОНТАЖНЫЕ РАБОТЫ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service"  href="<?php home_url();?>/vehicle-production" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/vaz.webp')">
                        <p>ПРОИЗВОДСТВО ТРАНСПОРТНЫХ СРЕДСТВ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service" href="<?php home_url();?>/IT" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/it.webp')">
                        <p>IT-ТЕХНОЛОГИИ, АВТОМАТИЗАЦИЯ ПРОИЗВОДСТВА, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service" href="<?php home_url();?>/science" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/kafedra.webp')">
                        <p>НАУЧНО-ИССЛЕДОВАТЕЛЬСКАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service" href="<?php home_url();?>/geology" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/geology.webp')">
                        <p>ИНЖЕНЕРНО-ГЕОЛОГИЧЕСКИЕ ИЗЫСКАНИЯ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>  
</section>
<!-- END CONTENT-->

<?php get_footer(); ?>
<?php wp_footer(); ?>