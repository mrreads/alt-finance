<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши проекты - АЛЬТЕРНАТИВНЫЕ ФИНАНСЫ</title>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <!-- Swiper JS -->
    <script type="text/javascript" src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <!-- Open Menu JS -->
    <script src="./resources/js/open-menu.js" defer></script>

    <!-- Wow min CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    

    <link rel="stylesheet" href="./resources/css/main.css">
    
    <link rel="stylesheet" href="./resources/css/header.css">
    <link rel="stylesheet" href="./resources/css/navigation.css">
    <link rel="stylesheet" href="./resources/css/content.css">
    <link rel="stylesheet" href="./resources/css/footer.css">

    <!-- Services -->
    <link rel="stylesheet" href="./resources/css/all-services.css">
    <!-- Contacts -->
    <link rel="stylesheet" href="./resources/css/contacts.css">
    <!-- Sitecard -->
    <link rel="stylesheet" href="./resources/css/sitecard.css">
    <!-- Static service pages -->
    <link rel="stylesheet" href="./resources/css/static-service-page.css">
    <!-- About -->
    <link rel="stylesheet" href="./resources/css/about.css">
    <!-- All goods -->
    <link rel="stylesheet" href="./resources/css/all-goods.css">
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">


    <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(58038331, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/58038331" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
</head>
<body>
<?php include_once ('./header.php');?>

    <section class="slider all-services">
        <div class="container" style="padding-bottom: 0px;">
            <div class="swiper-container slider">
            <!-- <h1 class="title">Новые проекты</h1> -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-item" style="background-image: url('./resources/img/projects/house/house.webp')">
                            <h2>Всплывающий дом</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item" style="background-image: url('./resources/img/projects/trash/trash.webp')">
                            <h2>Мусороперерабатывающие заводы</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item" style="background-image: url('./resources/img/webp/services/vaz.webp')">
                            <h2>Товар 3</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item" style="background-image: url('./resources/img/webp/services/it.webp')">
                            <h2>Товар 4</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item" style="background-image: url('./resources/img/webp/services/kafedra.webp')">
                            <h2>Товар 5</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item" style="background-image: url('./resources/img/webp/services/geology.webp')">
                            <h2>Товар 6</h2>
                        </div>
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
                        <div class="service" style="background-image: url('./resources/img/projects/house/house.webp');">
                            <p>Всплывающий дом</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quisquam eum natus dolorum veniam unde incidunt</span>
                        </div>
                        <div class="service" style="background-image: url('./resources/img/projects/trash/trash.webp');">
                            <p>Мусороперерабатывающие заводы</p>
                            <span>  
                                Строительство перерабатывающих заводов позволит не только перерабатывать отходы, но и переработанную продукцию применять в различных отраслях.
                                <!-- Такой тип заводов позиционирует к существующим следующим:
                                    - внедрением новых технологических процессов по переработке мусора;
                                    - отсутствием выбросов СО(2) и сопутствующих химических соединений;
                                    - исключение ручной сортировки;
                                    - переработка как смешанного вида отходов, так и раздельного;
                                Раздельный вид подразделяется на отходы органические и не органические. -->
                            </span>
                        </div>
                        <div class="service" style="background-image: url('./resources/img/webp/services/vaz.webp')">
                            <p>Товар 3</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quisquam eum natus dolorum veniam unde incidunt</span>
                        </div>
                        <div class="service" style="background-image: url('./resources/img/webp/services/it.webp')">
                            <p>Товар 4</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quisquam eum natus dolorum veniam unde incidunt</span>
                        </div>
                        <div class="service" style="background-image: url('./resources/img/webp/services/kafedra.webp')">
                            <p>Товар 5</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quisquam eum natus dolorum veniam unde incidunt</span>
                        </div>
                        <div class="service" style="background-image: url('./resources/img/webp/services/geology.webp')">
                            <p>Товар 6</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quisquam eum natus dolorum veniam unde incidunt</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- END CONTENT-->

    <?php include_once ('./footer.php');?>

    <script type="text/javascript" src="./resources/js/init-swiper1.js"></script>


</body>
</html>