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
                        Possimus delectus, cupiditate ipsum nam, facere tenetur, provident dicta doloremque sit porro reprehenderit fugiat. Ab consectetur reiciendis explicabo rem amet quisquam ipsa quos. Delectus unde suscipit ipsam architecto impedit amet?
                        Rem dicta ut, laborum quidem repudiandae similique, minima repellendus sit fuga, explicabo dolores fugiat modi consequatur eligendi iure totam nobis accusantium dolor ducimus ipsa labore harum sint ex reprehenderit! Dicta!
                        Distinctio laboriosam quo dolor aliquid autem facere consequuntur odio repudiandae voluptas! Ipsam explicabo mollitia provident, totam quos ipsa, reiciendis eos tempora culpa perspiciatis voluptatum distinctio aut voluptates vero debitis illum.
                        Id ad, facere impedit cupiditate vel aut odit iusto atque neque obcaecati corporis tenetur distinctio accusamus nesciunt ipsa corrupti, aliquid excepturi magnam expedita eius officiis animi hic. Soluta, molestiae voluptas.
                        Adipisci, error quos asperiores, veritatis voluptas recusandae dolorem voluptatibus rem corporis doloribus corrupti maiores. Rerum nam, in harum esse id beatae natus non reprehenderit incidunt quas culpa explicabo, dolorum inventore.
                        Similique eligendi nam vero impedit, atque exercitationem sapiente ipsam, reprehenderit repellat a rem minus fugit fuga quis autem consequuntur mollitia et ab explicabo accusantium? Optio, debitis! Ipsa totam tenetur ipsum.
                        Quas incidunt amet ab corporis hic accusamus vel vitae impedit dolorem? Iusto veniam magnam tempora ad quidem, voluptate ea at consequuntur, nam qui aspernatur. Impedit quo molestiae laborum repudiandae doloribus.
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
                                    <p class="n-heading"><?php the_title() ?></p>
                                    <p class="n-date"><?php the_date('F jS, Y') ?></p>
                                </div>
                                <hr>
                                <div class="n-text">
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
                                <div class="c-product slider-item" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                                    <a href="#">всплывающий дом 1</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('https://novate.ru/files/u31112/311122443.jpg');">
                                <a href="#">всплывающий дом 2</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('https://www.korabel.ru/filemanager/IMAGES/0/81/81099.jpg');">
                                    <a href="#">всплывающий дом 3</<a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('https://novamett.ru/media/k2/items/cache/3ff2a64fd14a6a6d971315fb7b8085ec_L.jpg');">
                                    <a href="#">всплывающий дом 4</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="c-product slider-item" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Lake_Bigeaux_houseboat.JPG/300px-Lake_Bigeaux_houseboat.JPG');">
                                    <a href="#">всплывающий дом 5</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="c-right">
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                    <div class="c-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/test.jpg');">
                        <p>всплываюищй дом</p>
                    </div>
                </div> -->
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