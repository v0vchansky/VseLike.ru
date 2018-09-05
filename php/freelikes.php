<?php
$email = $_POST['email'];
$question = $_POST['comments'];



$email = htmlspecialchars($email);
$question = htmlspecialchars($question);


$email = urldecode($email);
$question = urldecode($question);


$email = trim($email);
$question = trim($question);
//echo $fio;
//echo "<br>";
//echo $email;
mail("vse-like@yandex.ru", "Новый тестовый заказ", "Новый тестовый заказ \r\n". "E-mail:".$email."\r\n. Аккаунт: ".$question ."\r\n");
//mail($email, "Новый тестовый заказ", "Новый тестовый заказ \r\n". "E-mail:".$email."\r\n. Аккаунт: ".$question ."\r\n");
?>
<html>
    <head>
        <title>Спасибо за покупку</title>
        <link rel="shortcut icon" href="../img/icons/favicon.ico">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
       
    
    </head>
    <body>

        <div class="success-wrapper" style="width: 100%; padding: 0 30px 0 30px">
            <div class="success-inner" style="text-align: center;">
                <img style="width: 150px" src="../img/success.svg" alt="">
                <h2 style="margin-top: 20px; font-size: 60px">Спасибо за заказ!</h2>
                <h3 style="margin-top: 10px; font-size: 30px">Ваш пробный заказ подтвержден. В ближайшее время мы приступим к его выполнению!</h3>
                <br>
                <h3 style="margin-top: 10px; font-size:30px">Позволь себе дерзость выделяться из серой толпы! Переходи на сайт и получай еще больше лайков и подписчиков ежедневно!</h3>
                <div style="margin-top: 40px" class="col-md-5 col-sm-12 col-xs-12 col-lg-5 no-gutter col-md-no-padding-r">
                    <a href="/" class="scrollTo o-gutter no-padding btn btn-win btn-inst-6 inst-btn castom-button-1"><span class="bg"></span><span style="font-size: 30px" class="text">Вернуться на сайт <i style="font-size: 30px" class="fa fa-instagram instagram-icon" style="font-size: 15px;" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </body>
    <!-- Yandex.Metrika counter --> 
        <script type="text/javascript" > 
        (function (d, w, c) { 
        (w[c] = w[c] || []).push(function() { 
        try { 
        w.yaCounter48803657 = new Ya.Metrika({ 
        id:48803657, 
        clickmap:true, 
        trackLinks:true, 
        accurateTrackBounce:true, 
        webvisor:true 
        }); 
        } catch(e) { } 
        }); 
        
        var n = d.getElementsByTagName("script")[0], 
        s = d.createElement("script"), 
        f = function () { n.parentNode.insertBefore(s, n); }; 
        s.type = "text/javascript"; 
        s.async = true; 
        s.src = "https://mc.yandex.ru/metrika/watch.js";; 
        
        if (w.opera == "[object Opera]") { 
        d.addEventListener("DOMContentLoaded", f, false); 
        } else { f(); } 
        })(document, window, "yandex_metrika_callbacks"); 
        </script> 
        <noscript><div><img src="https://mc.yandex.ru/watch/48803657"; style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
        <!-- /Yandex.Metrika counter -->
        <script src="js/slick.min.js"></script>
        <script async src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script async src="js/jquery.loadform.min.js"></script>
        <script src="js/scripts.js"></script>
        <script async type="text/javascript" src="js/jquery.contact.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
<!-- /Yandex.Metrika counter -->
</html>