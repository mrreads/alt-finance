<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта сайта - АЛЬТЕРНАТИВНЫЕ ФИНАНСЫ</title>
    
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
<?php include_once('./header.php');?>

<section class="content contacts">
    <div class="container">

        <ul class="main-ul">
            <li class="hover"><a href="./index.php">Главная</a></li>
            <li class="hover"><a href="./about.php">О компании</a></li>
            <li class="hover"><a href="#">Список основных продуктов компании</a></li>
            <li class="dropdown-hover">
                <a href="./all-services.php" class="all-services">Виды услуг</a>
                    <ul class="daughter-ul">
                        <li class="hover"><a href="./consalting.php">консалтинг</a></li>
                        <li class="hover"> <a href="./building.php">
                            проектирование,
                            строительство,
                            реконструкция,
                            электромонтажные работы,
                            инжиниринговая деятельность</a></li>
                        <li class="hover"><a href="./autoVAZ.php">
                            производство транспортных средств,
                            инжиниринговая деятельность
                        </a></li>
                        <li class="hover"><a href="./IT.php">
                            IT технологии,
                            автоматизация производства,
                            инжиниринговая деятельность
                        </a></li>
                        <li class="hover"><a href="./science.php">научно-исследовательская деятельность</a></li>
                        <li class="hover last-hover"><a href="./geology.php">инженерно-геологические изыскания</a></li>
                    </ul>
            </li>
            <li class="hover"><a href="#">Фото и видео, Youtube канал.</a></li>
            <li class="hover"><a href="./contacts.php">Контакты</a></li>
            <li class="hover"><a href="./sitecard.php">Карта сайта</a></li>
        </ul>
    </div>
    
</section>

<?php include_once('./footer.php');?>