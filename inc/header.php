<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if(isset($desc)) {
        echo "<meta name=\"description\" content=\"$desc\">";
    }
    ?>
    <link rel="icon" href="favicon.ico"/>
    <title>
        <?php if(isset($title)) {
            echo $title;
        } else {
            echo 'INVENTOR початкова школа';
        }
        ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles/all.css?v=<?php echo filemtime('styles/all.css'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135646663-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-135646663-6');
    </script>
    <meta name="facebook-domain-verification" content="9lueeapdru1imxktsohyrg283h6xs0" />
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1725051697551996');
        fbq('track', 'PageView');
    </script>



</head>
<body>
<noscript>
    <img height="1" width="1"
         src="https://www.facebook.com/tr?id=1725051697551996&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<header class="header">
    <div class="header__wrapper">
        <div class="header__content">
            <div class="header__logo">
<!--                <a href="index"><img src="img/logo.svg" alt="logo"></a>-->
                <a href="index"><img src="img/logo-v2.png" alt="logo"></a>
            </div>
            <nav class="header__nav">
                <ul id="headerNavUl">
                    <li><a href="index">Головна</a></li>
                    <li><a href="about_school">Про школу</a></li>
                    <li><a href="#!">Методика навчання</a>
                        <ul>
                            <li><a href="stem">STEM-технологія</a></li>
                            <li><a href="educational_programs">Освітня програма</a></li>
                        </ul>
                    </li>
                    <li><a href="entry">Батькам</a></li>
                    <li><a href="vacancy">Вакансії</a></li>
                    <li><a href="contacts">Контакти</a></li>
                </ul>
            </nav>
            <a href="#!" class="header__burger-trigger">
                <img src="img/hamburger.png" alt="menu">
            </a>
        </div>
        <div class="header__phone">
            <span>
            <a href="tel:+380503155790"><i class="fas fa-phone-alt"></i> +38 (050) 315 57 90</a>
            <a href="" class="_phone"><i class="fas fa-phone-alt"></i> </a>
            </span>
        </div>
    </div>
</header>