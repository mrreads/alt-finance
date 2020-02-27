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

        <!-- NAV -->
        <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => null,
            'menu_class' => 'menu'
        )); ?>
        <!-- END NAV -->

        <!-- CONTENT -->
        <section class="content">
            <div class="container">
                <div class="c-left">
                    <div class="c-main">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, rerum perferendis? Quisquam ut quaerat modi aperiam eveniet, necessitatibus veritatis nam atque eos explicabo minus, beatae, cupiditate natus inventore a dolorum.
                        Consequuntur ipsa animi aperiam! Esse nam, minus enim facere ratione magnam atque quidem? Laudantium eos voluptatem eaque atque? Voluptate pariatur tempora sapiente, deserunt assumenda natus nesciunt consequuntur ducimus aperiam et.
                        In assumenda, autem repudiandae praesentium laudantium animi cumque odio! Nam omnis eos labore sed vitae quo error possimus repellat, voluptates eligendi voluptatem molestiae minima doloremque voluptas pariatur provident tempore similique!
                        Possimus delectus, cupiditate ipsum nam, facere tenetur, provident dicta doloremque sit porro reprehenderit fugiat. 
                        <br> <br>
                        Ab consectetur reiciendis explicabo rem amet quisquam ipsa quos. Delectus unde suscipit ipsam architecto impedit amet?
                        Rem dicta ut, laborum quidem repudiandae similique, minima repellendus sit fuga, explicabo dolores fugiat modi consequatur eligendi iure totam nobis accusantium dolor ducimus ipsa labore harum sint ex reprehenderit! Dicta!
                        Distinctio laboriosam quo dolor aliquid autem facere consequuntur odio repudiandae voluptas! Ipsam explicabo mollitia provident, totam quos ipsa, reiciendis eos tempora culpa perspiciatis voluptatum distinctio aut voluptates vero debitis illum.
                        Id ad, facere impedit cupiditate vel aut odit iusto atque neque obcaecati corporis tenetur distinctio accusamus nesciunt ipsa corrupti, aliquid excepturi magnam expedita eius officiis animi hic. Soluta, molestiae voluptas.
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