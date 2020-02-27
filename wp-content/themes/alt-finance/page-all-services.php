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
                    <a class="slider-item" href="<?php home_url()?>/consulting" style="background-image: url('https://myrouble.ru/wp-content/uploads/2018/04/1-consulting-2.jpg')">
                        <h2>КОНСАЛТИНГ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/building" style="background-image: url('https://rcmm.ru/uploads/posts/2016-11/1478692650_865637921.jpg')">
                        <h2>ПРОЕКТИРОВАНИЕ, СТРОИТЕЛЬСТВО, РЕКОНСТРУКЦИЯ, ЭЛЕКТРОМОНТАЖНЫЕ РАБОТЫ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item"  href="<?php home_url()?>/vehicle-production"style="background-image: url('https://rossaprimavera.ru/static/files/38ef4d3f7b6a.jpg')">
                        <h2>ПРОИЗВОДСТВО ТРАНСПОРТНЫХ СРЕДСТВ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/IT" style="background-image: url('https://awsimages.detik.net.id/customthumb/2013/07/06/319/datacentre.jpg?w=700&q=90')">
                        <h2>IT-ТЕХНОЛОГИИ, АВТОМАТИЗАЦИЯ ПРОИЗВОДСТВА, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/science" style="background-image: url('https://yarkb3.ru/wp-content/uploads/2018/12/kafedra1.jpg')">
                        <h2>НАУЧНО-ИССЛЕДОВАТЕЛЬСКАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="slider-item" href="<?php home_url()?>/geology" style="background-image: url('https://geo-analiz.ru/wp-content/uploads/2018/12/Ris.-2-2.jpg')">
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
                    <a class="service" href="<?php home_url()?>/consulting" style="background-image: url('https://myrouble.ru/wp-content/uploads/2018/04/1-consulting-2.jpg')">
                        <p>КОНСАЛТИНГ</p>
                    </a>
                    <a class="service" href="<?php home_url()?>/building" style="background-image: url('https://rcmm.ru/uploads/posts/2016-11/1478692650_865637921.jpg')">
                        <p>ПРОЕКТИРОВАНИЕ, СТРОИТЕЛЬСТВО, РЕКОНСТРУКЦИЯ, ЭЛЕКТРОМОНТАЖНЫЕ РАБОТЫ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service"  href="<?php home_url()?>/vehicle-production"style="background-image: url('https://rossaprimavera.ru/static/files/38ef4d3f7b6a.jpg')">
                        <p>ПРОИЗВОДСТВО ТРАНСПОРТНЫХ СРЕДСТВ, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service" href="<?php home_url()?>/IT" style="background-image: url('https://awsimages.detik.net.id/customthumb/2013/07/06/319/datacentre.jpg?w=700&q=90')">
                        <p>IT-ТЕХНОЛОГИИ, АВТОМАТИЗАЦИЯ ПРОИЗВОДСТВА, ИНЖИНИРИНГОВАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service" href="<?php home_url()?>/science" style="background-image: url('https://yarkb3.ru/wp-content/uploads/2018/12/kafedra1.jpg')">
                        <p>НАУЧНО-ИССЛЕДОВАТЕЛЬСКАЯ ДЕЯТЕЛЬНОСТЬ</p>
                    </a>
                    <a class="service" href="<?php home_url()?>/geology" style="background-image: url('https://geo-analiz.ru/wp-content/uploads/2018/12/Ris.-2-2.jpg')">
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