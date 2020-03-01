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
            <!-- <h1 class="title">Новые проекты</h1> -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="slider-item" href="<?php home_url(); ?>/project-house" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/projects/house/1.jpg')">
                            <h2>Всплывающий дом</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slider-item" href="<?php home_url(); ?>/building" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/building.webp')">
                            <h2>Товар 2</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slider-item"  href="<?php home_url(); ?>/vehicle-production" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/vaz.webp')">
                            <h2>Товар 3</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slider-item" href="<?php home_url(); ?>/IT" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/it.webp')">
                            <h2>Товар 4</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slider-item" href="<?php home_url(); ?>/science" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/kafedra.webp')">
                            <h2>Товар 5</h2>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="slider-item" href="<?php home_url(); ?>/geology" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/geology.webp')">
                            <h2>Товар 6</h2>
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
                        <a class="service" href="<?php home_url(); ?>/project-house" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/projects/house/1.jpg')">
                            <p>Всплывающий дом</p>
                        </a>
                        <a class="service" href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/building.webp')">
                            <p>Товар 2</p>
                        </a>
                        <a class="service"  href="#"style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/vaz.webp')">
                            <p>Товар 3</p>
                        </a>
                        <a class="service" href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/it.webp')">
                            <p>Товар 4</p>
                        </a>
                        <a class="service" href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/kafedra.webp')">
                            <p>Товар 5</p>
                        </a>
                        <a class="service" href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/services/geology.webp')">
                            <p>Товар 6</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- END CONTENT-->

    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>
</html>