<?php wp_head(); ?>

<?php get_header(); ?>
<?php wp_nav_menu(array(
    'theme_location' => 'header_menu',
    'container' => null,
    'menu_class' => 'menu'
)); ?>
<section class="content">
    <div class="container">
        <div class="c-left">
            <div class="c-main class1">
                <h1 class="service-title wow fadeInDown">о компании</h1>
                <div class="about-big-img" style="background-image: url('./resources/img/image 8.jpg');">

                    <h1 class="service-title wow fadeInLeft" data-wow-duration="1.4s">Мы - Мультифункциональная компания</h1>
                    <p class="service-text wow fadeInUp" data-wow-duration="1.7s">ООО «Альтернативные Финансы» является развивающейся компанией на российском рынке и объединяющая в себе несколько независимых, базирующихся на продвижении и внедрении инновационных разработок отделений, обладая уникальной экспертизой в области проектирования, управления строительством, автоматизацией производства, жилых комплексов, воздушного, водного и наземного транспорта, IT-технологий, робототехники, а также исследовании искусственного интеллекта и других научно-исследовательских направлений в области фундаментальной и прикладной науке. Компания была основана в 2010 году и уже 10 лет демонстрирует уверенный рост и надежную работу в заявленной сфере деятельности.

                    <p class="service-text wow fadeInUp" data-wow-duration="1.7s">Нам удалось создать профессиональную команду ученых, дизайнеров, проектировщиков, инженеров, и менеджеров, которая предоставляет диверсифицированные услуги самого высокого качества, востребованные на рынке прогрессивных технологий.
                    </p>

                </div>

                <div class="our-partners">
                    <h1 class="service-title wow fadeInDown" style="margin-bottom: 45px">Мы рабоатем с такими компаниями, как</h1>
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->

                            <div class="swiper-slide">
                                <a class="slider-item about" href="#" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/rjd1.png');">  </a>
                                <p>РЖД</p> 
                            </div>
                            <div class="swiper-slide">
                                <a class="slider-item about" href="#" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/rjd1.png');">  </a>
                                <p>РЖД</p> 
                            </div>
                            <div class="swiper-slide">
                                <a class="slider-item about" href="#" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/rjd1.png');">  </a>
                                <p>РЖД</p> 
                            </div>
                            <div class="swiper-slide">
                                <a class="slider-item about" href="#" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/rjd1.png');">  </a>
                                <p>РЖД</p> 
                            </div>
                            <div class="swiper-slide">
                                <a class="slider-item about" href="#" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/rjd1.png');">  </a>
                                <p>РЖД</p> 
                            </div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<?php wp_footer(); ?>