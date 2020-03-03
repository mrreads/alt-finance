<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>
    
    <div id="wrapper">
        <!-- HEADER -->
        <?php get_header(); ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <section class="content">
            <div class="container">
                <div class="c-left">
                    <div class="c-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg'); height: 500px;">
                        <h1 class="main-title-about">РЕШЕНИЯ БУДУЩЕГО УЖЕ СЕГОДНЯ!</h1>
                    </div>
                    
                    <div class="c-news">
                        <?php 
                        $posts = get_posts(array(
                            'numberposts' => 3,
                            'post_type' => 'post',
                            'suppress_filters' => true
                        ));
                        
                        foreach($posts as $post)
                        { setup_postdata($post);
                        ?>
                            <div class="news">
                                <div class="n-title">
                                    <p class="n-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    <p class="n-date"><?php the_date('F jS, Y'); ?></p>
                                </div>
                                <hr>
                                <div class="n-text">
                                    <?php the_post_thumbnail(); ?>
                                    <p><?php the_excerpt(); ?></p>
                                </div> 
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                
                <div class="c-right index">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/projects/автомобиль2.webp');">
                                    <a href="#">ЭЛЕКТРОКАРЫ</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style = "background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/projects/воздушный дом.webp');">
                                <a href="#">ВОЗДУШНЫЕ ДОМА</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/projects/летательный аппарат1.webp'); background-position: center right;">
                                    <a href="#">ЛЕТАТЕЛЬНЫЕ АППАРАТЫ</<a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/projects/подводный отель.webp');">
                                    <a href="#">ПОДВОДНЫЕ ОТЕЛИ</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/webp/projects/теплицы.webp');">
                                    <a href="#">ТЕПЛИЦЫ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTENT-->

        <!-- FOOTER -->
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
        <!-- END FOOTER -->

    </div>

</body>
</html>