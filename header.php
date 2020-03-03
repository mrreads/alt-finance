<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
    <!-- HEADER -->
    <header class="header">
            <div class="header_info">
                <a href="/index.php" class="header_info_src">
                    <!-- <img src="./resources/img/webp/index/logo.webp" alt="Логотип компании." class="h-i_logo"> -->
                    <!-- <h1 class="h-i_heading">Альтернативные финансы</h1> -->
                    <img src="./resources/img/logo/лого.jpg" alt="Лого" class="h-i_logo">
                </a>
            </div>
            <div class="header_act">
                <div class="hidden-button">
                    <img src="./resources/img/icons/hidden.png" alt="ТЫКАЙ БЛЯТЬ!" class="hidden-nav-button">
                    <button class="f-a_language">Switch to English</button>
                </div>
                
                <form action="" class="f-a_search-f">
                    <input type="search" name="search" placeholder="Search...">
                    <input type="submit" value="">
                </form>
                
            </div>
    </header>
    <!-- END HEADER -->
    <!-- NAV -->
    <nav class="menu" style="display: none;">
   
        <div class="container">
            <ul>
                <li><a href="./index.php">Главная</a></li>
                <li><a href="./about.php">О компании</a></li>
                <!-- <li><a href="#">Контакты</a></li> -->
                <li><a href="./all-goods.php">основные продукты компании</a></li>
                <li class="dropdown-hover">
                    <a href="./all-services.php" style="min-width: 270px; display: block; text-decoration: none;">Виды услуг</a>
                    <div class="dropdown-menu">
                        <a href="./consalting.php">консалтинг</a>
                        <a href="./building.php">
                            проектирование
                            <br>строительство
                            <br>реконструкция
                            <br>электромонтажные работы
                            <br>инжиниринговая деятельность</a>
                        <a href="./autoVAZ.php">
                            производство транспортных средств
                            <br>инжиниринговая деятельность
                        </a>
                        <a href="./IT.php">
                            IT технологии
                            <br>автоматизация производства
                            <br>инжиниринговая деятельность</a>
                        <a href="./science.php">научно-исследовательская деятельность</a>
                        <a href="./geology.php">инженерно-геологические изыскания</a>
                        </div>
                </li>
                <li><a href="./media.php">Фото и видео, Youtube канал.</a></li>
                <li><a href="./contacts.php">Контакты</a></li>
            </ul>
        </div>
    </nav>
    <!-- END NAV -->