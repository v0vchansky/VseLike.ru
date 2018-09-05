<?php 
    $merchant_id = '74958';
    $secret_word = '4i54k3b4';
    $order_id = '154';
    $order_amount = '100.11';
    $sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$order_id);


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/">
    
    <title>VseLike - накрутка живых подписчиков</title>
    <meta property="og:title" content="Качественная накрутка подписчиков и лайков Instagram" />
    <meta name="description" content="VseLike - Качественная прокачка Instagram.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="megakassa" content="4383382b06e" />
    <meta name="yandex-verification" content="82ee1d5c70ca709a" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#5e00b1">
    <link rel="icon" sizes="192x192" href="img/icons/favicon-highres.png">
    <link rel="stylesheet" href="css/slick.css">
    <!-- <link rel="stylesheet" href="css/slick-theme.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '631226030555138'); 
        fbq('track', 'PageView');
        </script>
        <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=631226030555138&ev=PageView
        &noscript=1"/>
        </noscript>
</head>

<body class="inst">     
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <div class="navbar-brand"><a href="http://www.instagram.com/topinstagsmm/" class="logo" id="logo"><i aria-hidden="true" class="fa fa-instagram" style="font-size: 35px;"></i></a></div>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right">
                                    <!-- <li></li> -->
                                    <!-- <li class="active scrollTo"><a href="index.html">Главная</a></li> -->
                                    <li><a class="scrollTo" onclick="pushHistory('/followers');" href="#followers">Подписчики</a></li>
                                    <li><a class="scrollTo" onclick="pushHistory('/likes');" href="#likes">Лайки</a></li>

                                    <li><a class="scrollTo" onclick="pushHistory('/faq');" href="#faq">Вопросы</a></li>
                                    <!-- <li><a class="scrollTo" href="#questions">Написать нам</a></li> -->
                                    <!-- <li></li>   -->
                              </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 no-padding-lr fadeInLeftBig wow">
                    <img src="img/instaphones-md.png" width="" class="hidden-sm hidden-xs">
                    <img src="img/instaphones-sm.png" width="" class="hidden-md hidden-xs hidden-lg">
                    <img src="img/instaphones-xs.png" width="" class="hidden-sm hidden-md hidden-lg">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 no-padding-l">
                    <div class="flex-fix">
                        <h1 class="main-h1" style="font-size: 30px; margin-bottom: 20px">Быстая накрутка подписчиков <br> и лайков.</h1>
                        <div style="margin-top: 20px" class="custom-btn other-class"><span>СКИДКА 70%</span></div>
                    
                        <div style="margin-top: 20px" class="custom-btn"><h1 class="time"></h1></div>
                                <a style="margin-top: 20px" href="#followers" class="custom-btn scrollTo btn btn-win inst-btn btn-inst-6 btn btn-inst-2 test-button castom-button-1 begin-button"><span class="bg"></span><span class="text">начать сейчас <i class="fa  fa-instagram instagram-icon test-icon" style="font-size: 15px;" aria-hidden="true"></i></span></a>

                    </div>
                    <!-- <p class="error_message">Внимание! Некоторые заказы могут выполняться с задержкой. В течении суток, все заказы будут выполнены. Приносим извинения за все доставленные неудобства.</p> -->
                    <!--<div class="row no-gutter no-padding-lr">
                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-4 no-gutter col-md-no-padding-r">
                            <a href="#likes" onclick="pushHistory('/likes');" class="no-gutter no-padding scrollTo btn btn-win inst-btn  btn-inst-6"><span class="bg custom-button"></span><span class="text">лайки <i class="fa fa-instagram instagram-icon" style="font-size: 15px;" aria-hidden="true"></i></span></a>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-4 no-gutter col-md-no-padding-r">
                            <a href="#followers" onclick="pushHistory('/followers');" class="scrollTo btn btn-win inst-btn  btn-inst-6"><span class="bg"></span><span class="text">подписчики <i class="fa fa-instagram instagram-icon" style="font-size: 15px;" aria-hidden="true"></i></span></a>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-8 no-gutter col-md-no-padding-r">
                            <a href="html_forms/instagram/likes/0.html" class="btn btn-win inst-btn btn-inst-6 btn-pay btn btn-inst-2 test-button castom-button-1"><span class="bg"></span><span class="text">бесплатная накрутка <i class="fa fa-instagram instagram-icon test-icon" style="font-size: 15px;" aria-hidden="true"></i></span></a>
                        </div>
                        

                        <div class="col-md-5 col-sm-12 col-lg-12">
                            <a href="#questions" onclick="pushHistory('/faq');" class="scrollTo btn btn-about ask-btn text-center">Задай вопрос</a>
                        </div>
                    </div>-->
                </div>
            </div>              
        </div>
        <a class="scrollTo col-md-2 col-md-offset-5" id="" href="#followers">
            <div class="mouse-icon">
                <div class="wheel"></div>
            </div>
        </a>
         </section><section class="pay-section" id="followers">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Живые подписчики Instagram</h1>
                </div>
            </div>

                <div class="row pay-row goods-row">
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">500</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price pay-striked"><del>231</del><sup>р</sup></div>
                            <div class="pay-price">99<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/500.html" class="btn-pay btn btn-inst-5 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block block-sale">
                            <div class="pay-count">1000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price pay-striked"><del>324</del><sup>р</sup></div>
                            <div class="pay-price">139<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/1000.html" class="btn-pay btn btn-inst-5 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">2000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price pay-striked"><del>581</del><sup>р</sup></div>
                            <div class="pay-price">249<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/2000.html" class="btn-pay btn btn-inst-5 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">3000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price pay-striked"><del>814</del><sup>р</sup></div>
                            <div class="pay-price">349<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/3000.html" class="btn-pay btn btn-inst-5 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">5000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price pay-striked"><del>1390</del><sup>р</sup></div>
                            <div class="pay-price">559<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/5000.html" class="btn-pay btn btn-inst-5 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">10000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price pay-striked"><del>2780</del><sup>р</sup></div>
                            <div class="pay-price">980<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/10000.html" class="btn-pay btn btn-inst-5 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>

                    <!-- <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">30000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price">1149<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/30000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div> -->
                </div>
                <div class="row pay-row slideInUp wow">
                    <div class="col-md-1 col-sm-2 col-xs-12 text-center pay-info">                      
                        <i class="fa fa-info-circle icon" style="font-size: 43px;" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-12 pay-info no-padding-l">
                        <p><b>Для оформления заказа:</b></p>
                        <p class="info-str">Выберите нужное Вам количество - укажите ссылку на страницу. 
Профиль должен быть открытым и с загруженным аватаром. 

Накрутка премиум подписчиков стартует в течение нескольких дней. Гаранития от списаний - 2 месяца.

*Скорость около 1-5 тысяч в сутки.</p>
                    </div>
                </div>
        </section>      <section class="pay-section" id="likes" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="fixer-hi">Живые лайки Instagram</h1>
                    </div>
                </div>
                <div class="row pay-row goods-row">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="pay-count">100</div>
                            <div class="pay-name">живых лайков</div>
                            <div class="pay-price pay-striked"><del>41</del><sup>р</sup></div>
                            <div class="pay-price">19<sup>р</sup></div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО ЛАЙКОВ</div>
                            <div class="pay-name">100% С ФОТО И ПОСТАМИ</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/likes/100.html" class="btn-pay btn btn-inst-2 castom-button"><span style="" class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block block-sale">
                            <div class="pay-count">500</div>
                            <div class="pay-name">живых лайков</div>
                            <div class="pay-price pay-striked"><del>137</del><sup>р</sup></div>
                            <div class="pay-price">59<sup>р</sup></div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО ЛАЙКОВ</div>
                            <div class="pay-name">100% С ФОТО И ПОСТАМИ</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/likes/500.html" class="btn-pay btn btn-inst-2 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="pay-count">1000</div>
                            <div class="pay-name">живых лайков</div>
                            <div class="pay-price pay-striked"><del>231</del><sup>р</sup></div>
                            <div class="pay-price">99<sup>р</sup></div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО ЛАЙКОВ</div>
                            <div class="pay-name">100% С ФОТО И ПОСТАМИ</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/likes/1000.html" class="btn-pay btn btn-inst-2 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="pay-count">3000</div>
                            <div class="pay-name">живых лайков</div>
                            <div class="pay-price pay-striked"><del>417</del><sup>р</sup></div>
                            <div class="pay-price">179<sup>р</sup></div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО ЛАЙКОВ</div>
                            <div class="pay-name">100% С ФОТО И ПОСТАМИ</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/likes/5000.html" class="btn-pay btn btn-inst-2 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="pay-count">5000</div>
                            <div class="pay-name">живых лайков</div>
                            <div class="pay-price pay-striked"><del>651</del><sup>р</sup></div>
                            <div class="pay-price">249<sup>р</sup></div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО ЛАЙКОВ</div>
                            <div class="pay-name">100% С ФОТО И ПОСТАМИ</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/likes/5000.html" class="btn-pay btn btn-inst-2 castom-button"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                </div>
                <div class="row pay-row slideInUp wow">
                    <div class="col-md-1 col-sm-2 col-xs-12 text-center pay-info">                      
                        <i class="fa fa-info-circle icon" style="font-size: 43px;" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-12 pay-info no-padding-l">
                        <p><b>Для оформления заказа:</b></p>
                        <p class="info-str">Выберите нужное Вам количество - укажите ссылку на пост. <br> Профиль должен быть открытым и с загруженным аватаром.</p>
                    </div>
                </div>
            </div>
   
            <!-- <div class="row"> -->
                <!-- <div class="col-md-12 text-center"> -->
                    <!-- <h2>Подписчики ЭКОНОМ<div class="engaging-text">Низкая скорость, большие списания</div></h2>  -->
                <!-- </div> -->
            <!-- </div> -->
                <!-- <div class="row pay-row goods-row"> -->
                    <!-- <div class="col-md-4 col-sm-6"> -->
                        <!-- <div class="block"> -->
                            <!-- <div class="pay-count">500</div> -->
                            <!-- <div class="pay-name">эконом подписчиков</div> -->
                            <!-- <div class="pay-price">79<sup>р</sup></div> -->
                            <!-- <div class="pay-name">100% С ФОТО</div> -->
                            <!-- <div class="pay-name">НЕТ БАНА</div> -->
                            <!-- <a href="html_forms/instagram/esubs/500.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-4 col-sm-6"> -->
                        <!-- <div class="block block-sale"> -->
                            <!-- <div class="pay-count">1000</div> -->
                            <!-- <div class="pay-name">эконом подписчиков</div> -->
                            <!-- <div class="pay-price">119<sup>р</sup></div> -->
                            <!-- <div class="pay-name">100% С ФОТО</div> -->
                            <!-- <div class="pay-name">НЕТ БАНА</div> -->
                            <!-- <a href="html_forms/instagram/esubs/1000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-4 col-sm-6"> -->
                        <!-- <div class="block"> -->
                            <!-- <div class="pay-count">2000</div> -->
                            <!-- <div class="pay-name">эконом подписчиков</div> -->
                            <!-- <div class="pay-price">169<sup>р</sup></div> -->
                            <!-- <div class="pay-name">100% С ФОТО</div> -->
                            <!-- <div class="pay-name">НЕТ БАНА</div> -->
                            <!-- <a href="html_forms/instagram/esubs/2000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-4 col-sm-6"> -->
                        <!-- <div class="block"> -->
                            <!-- <div class="pay-count">5000</div> -->
                            <!-- <div class="pay-name">эконом подписчиков</div> -->
                            <!-- <div class="pay-price">319<sup>р</sup></div> -->
                            <!-- <div class="pay-name">100% С ФОТО</div> -->
                            <!-- <div class="pay-name">НЕТ БАНА</div> -->
                            <!-- <a href="html_forms/instagram/esubs/5000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-4 col-sm-6"> -->
                        <!-- <div class="block"> -->
                            <!-- <div class="pay-count">10000</div> -->
                            <!-- <div class="pay-name">эконом подписчиков</div> -->
                            <!-- <div class="pay-price">519<sup>р</sup></div> -->
                            <!-- <div class="pay-name">100% С ФОТО</div> -->
                            <!-- <div class="pay-name">НЕТ БАНА</div> -->
                            <!-- <a href="html_forms/instagram/esubs/10000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-4 col-sm-6"> -->
                        <!-- <div class="block"> -->
                            <!-- <div class="pay-count">20000</div> -->
                            <!-- <div class="pay-name">эконом подписчиков</div> -->
                            <!-- <div class="pay-price">889<sup>р</sup></div> -->
                            <!-- <div class="pay-name">100% С ФОТО</div> -->
                            <!-- <div class="pay-name">НЕТ БАНА</div> -->
                            <!-- <a href="html_forms/instagram/esubs/20000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="row pay-row slideInUp wow"> -->
                    <!-- <div class="col-md-1 col-sm-2 col-xs-12 text-center pay-info">                      -->
                        <!-- <i class="fa fa-info-circle icon" style="font-size: 43px;" aria-hidden="true"></i> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-11 col-sm-10 col-xs-12 pay-info no-padding-l"> -->
                        <!-- <p><b>Для оформления заказа:</b></p> -->
                        <!-- <p class="info-str">Выберите нужное Вам количество - укажите ссылку на страницу. <br> Профиль должен быть открытым и с загруженным аватаром. <br></p> -->
                        <!-- <p class="info-str">Эконом подписчики - боты с небольшой частью офферов.</p> -->
                        <!-- <p class="info-str">*Скорость до тысячи в сутки. Возможна частичная недокрутка.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
                
            <!-- <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Подписчики из России<div class="engaging-text">Новинка!</div></h2> 
                </div>
            </div>
                <div class="row pay-row goods-row">
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">500</div>
                            <div class="pay-name">русскоязычных подписчиков</div>
                            <div class="pay-price">129<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/rusubs/500.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block block-sale">
                            <div class="pay-count">1000</div>
                            <div class="pay-name">русскоязычных подписчиков</div>
                            <div class="pay-price">199<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/rusubs/1000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">2000</div>
                            <div class="pay-name">русскоязычных подписчиков</div>
                            <div class="pay-price">329<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/rusubs/2000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">5000</div>
                            <div class="pay-name">русскоязычных подписчиков</div>
                            <div class="pay-price">699<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/rusubs/5000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">10000</div>
                            <div class="pay-name">русскоязычных подписчиков</div>
                            <div class="pay-price">1249<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/rusubs/10000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">15000</div>
                            <div class="pay-name">русскоязычных подписчиков</div>
                            <div class="pay-price">1749<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/rusubs/15000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div>
                </div>
                <div class="row pay-row slideInUp wow">
                    <div class="col-md-1 col-sm-2 col-xs-12 text-center pay-info">                      
                        <i class="icon icon-info anim"></i>
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-12 pay-info">
                        <p><b>Для оформления заказа:</b></p>
                        <p class="info-str">Выберите нужное Вам количество - укажите ссылку на страницу. <br> Профиль должен быть открытым и с загруженным аватаром. <br></p>
                        <p class="info-str">Накрутка русскоязычных подписчиков стартует в течение нескольких дней.</p>
                        <p class="info-str">*Скорость около 1-5 тысяч в сутки.</p>
                    </div>
                </div>
            </div> -->
           
        
        
        
        </section><section id="faq" class="text-center">
            <div class="container how-to">
                <div class="col-md-12">
                    <h1 class="text-center">Как заказать</h1>
                    <div class="row">
                        <div class="col-how-to col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 col-sm-offset-0 no-padding-lr fadeIn wow">
                            <div class="row">
                                <div class="col-md-12 no-padding-lr">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <div id="circle"></div>
                                            <p class="geo-text">1</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="line" class="hidden-sm hidden-xs"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="geo-description"><b>Найдите подходящую накрутку</b>
                                    <br>Внимательно прочитайте описание, укажите корректные данные и жмите «ЗАКАЗАТЬ».</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-how-to col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 col-sm-offset-0 no-padding-lr fadeIn wow">
                            <div class="row">
                                <div class="col-md-12 no-padding-lr">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div id="line" class="hidden-sm hidden-xs"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="circle"></div>
                                            <p class="geo-text">2</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="line" class="hidden-sm hidden-xs"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="geo-description"><b>Выберите подходящий метод оплаты</b>
                                    <br>Оплатить можно прямо на нашем сайте, с помощью сервиса MegaKassa. После оплаты Вы получите чек на указанную почту.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-how-to col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-0 col-sm-offset-3 no-padding-lr fadeIn wow">
                            <div class="row">
                                <div class="col-md-12 no-padding-lr">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div id="line" class="hidden-sm hidden-xs"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="circle"></div>
                                            <p class="geo-text">3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="geo-description"><b>Мы запускаем накрутку</b>
                                    <br>Накрутка подписчиков, просмотров и лайков обычно начинается в течение 15 минут. Накрутка премиум подписчиков стартует в течение 48 часов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="container" style="">
            <div class="col-md-3 col-lg-4"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-4 no-gutter col-md-no-padding-r">
                <div style="width: 100%; text-align: center;">
                    <a href="#followers" onclick="pushHistory('/followers');" class="scrollTo btn btn-win inst-btn  btn-inst-6 castom-button-1"><span class="bg"></span><span class="text">заказать сейчас <i class="fa fa-instagram instagram-icon" style="font-size: 15px;" aria-hidden="true"></i></span></a>
                </div>
                
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Вопросы</h1>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/1.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Это живые подписчики?
                                    </div>
                                    <div class="faq-answer">
                                        Мы привлекаем только живых и качественных подписчиков.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/2.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Сроки выполнения заказов?
                                    </div>
                                    <div class="faq-answer">
                                        Всё зависит от очереди. В большинстве случаев выполнение заказа начинается в течение 15 минут. Накрутка премиум подписчиков начинается в течение 48 часов.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/3.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Как оформить заказ?
                                    </div>
                                    <div class="faq-answer">
                                        Чтобы начать продвижение, выберите нужное количество и нажмите на кнопку. Затем укажите ссылку на открытый профиль с аватаркой (если Вам нужны подписчики), ссылку на видео (если Вам нужны просмотры), или ссылку на фото (если Вам нужны лайки). После чего укажите ваш действующий e-mail и выберите способ оплаты. Мы принимаем практически все возможные способы оплаты. В случае возникновения проблем, наша поддержка свяжется с Вами.<br><b>ВНИМАНИЕ!</b>   Не покидайте страницу оплаты, пока не будете перенаправлены обратно на сайт.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/4.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Какие гарантии?
                                    </div>
                                    <div class="faq-answer">
                                        Все платежи проходят через систему MegaKassa. После покупки подписчиков или лайков на Вашу почту придет электронный кассовый чек, который обязывает нас выполнить услугу в полном объеме. Мы стараемся выстраивать долгосрочные отношения с нашими клиентами. Нам выгодно чтобы Вы заказали повторно. Именно поэтому мы добросоветстно выполняем все заказы.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row second-row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/5.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Если подписчики будут отписываться? 
                                    </div>
                                    <div class="faq-answer">
                                        Чтобы избежать моментальных списаний, мы накручиваем подписчиков с запасом на 10-20%. Так что не сомневайтесь, подписчики останутся с Вами надолго.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/6.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Мой профиль должен быть открытым?
                                    </div>
                                    <div class="faq-answer">
                                        Да, Ваш профиль обязательно должен быть открытым и иметь загруженный аватар. Продвижение закрытых страниц невозможно. Если Вы хотите закрыть свой профиль, убедитесь, что накрутка завершилась.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/7.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        Меня не взломают? 
                                    </div>
                                    <div class="faq-answer">
                                        Мы не запрашиваем пароль от аккаунта, и не передаем персональную информацию третьим лицам.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="faq-block">
                                    <div class="faq-image">
                                        <img src="img/faq/8.png" alt>
                                    </div>
                                    <div class="faq-text">
                                        В какое время лучше оформлять заказы?
                                    </div>
                                    <div class="faq-answer">
                                        Система работает в автоматическом режиме. 24 часа! 7 дней в неделю! Вы можете оформлять заказы на сайте в любое время.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" style="margin-bottom: 140px;">
            <div class="col-md-3 col-lg-4"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-4 no-gutter col-md-no-padding-r">
                <div style="width: 100%; text-align: center;">
                    <a href="#followers" onclick="pushHistory('/followers');" class="scrollTo btn btn-win inst-btn  btn-inst-6 castom-button-1"><span class="bg"></span><span class="text">заказать сейчас <i class="fa fa-instagram instagram-icon" style="font-size: 15px;" aria-hidden="true"></i></span></a>
                </div>
                
            </div>
        </div>
        
        <div class="container" style="padding-bottom: 50px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Отзывы клиентов</h1>
                </div>
            </div>

                <div class="row pay-row goods-row">
                    <div class="col-md-4 col-sm-6">
                        <div class="block" style="padding: 0; border: 0">
                            <img style="width: 100%;" src="img/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block" style="padding: 0; border: 0">
                            <img style="width: 100%;" src="img/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block" style="padding: 0; border: 0">
                            <img style="width: 100%;" src="img/3.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block" style="padding: 0; border: 0">
                            <img style="width: 100%;" src="img/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block" style="padding: 0; border: 0">
                            <img style="width: 100%;" src="img/5.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block" style="padding: 0; border: 0">
                            <img style="width: 100%;" src="img/6.png" alt="">
                        </div>
                    </div>

                    <!-- <div class="col-md-4 col-sm-6">
                        <div class="block">
                            <div class="pay-count">30000</div>
                            <div class="pay-name">подписчиков</div>
                            <div class="pay-price">1149<sup>р</sup></div>
                            <div class="pay-name">100% С ФОТО</div>
                            <div class="pay-name">ВЫСОКОЕ КАЧЕСТВО</div>
                            <div class="pay-name">НЕТ БАНА</div>
                            <a href="html_forms/instagram/subs/30000.html" class="btn-pay btn btn-inst-5"><span class="bg"></span><span class="text">Заказать</span></a>
                        </div>
                    </div> -->
                </div>

        <section id="questions" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img class="bounce wow" src="img/text-us.png" alt id="q-margin">
                        <h1>Остались вопросы? Напишите нам, мы всегда открыты для Вас:</h1>
                        <p><br></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="message" class="text-center"></div>
                        <form action="php/support.php" class="" name="cform" id="cform" method="post">                      
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <input type="email" name="email" id="email" placeholder="Ваш email" style="width: 100%">
                                </div>
                                <div class="col-sm-5 col-md-5">
                                    <input type="text" name="comments" id="comments" placeholder="Задайте вопрос" style="width: 100%">
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <button type="submit" id="submit" name="send" class="btn btn-default" style="width: 100%">
                                        <span class="bg"></span>
                                        <span class="text">Отправить</span>
                                    </button>                                   
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
                <a class="scrollTo col-md-2 col-md-offset-5" onclick="pushHistory('/');" id="" href="#hero">
                    <div class="arrow-up"></div>
                </a>
            </div>
        </section>      <div class="container">
            <footer id="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="no-padding-lr col-xs-12 col-sm-3 col-md-3 text-center">
                            <a href="http://www.instagram.com/" class="logo" id="logo"><i aria-hidden="true" class="fa fa-instagram" style="font-size: 40px;"></i></a>
                            <!-- <div class="el"> -->
                                <!-- TopInstagram -->
                            <!-- </div>                          -->
                        </div>
                        <div class="no-padding-lr col-xs-12 col-sm-6 col-md-6 text-center">
                          <p>Техническая поддержка: vse-like@yandex.ru</p>                         
                        </div>
                        <div class="no-padding-lr col-xs-12 col-sm-3 col-md-3 text-center">
                            <!-- <a href="https://megakassa.ru/" title="Платежный агрегатор МегаКасса" target="_blank"><img src="https://megakassa.ru/pr/light_ru.jpg" alt="Megakassa" /></a> -->
                            <br><a href="http://www.free-kassa.com/" id="fksbtn"><img src="../www.free-kassa.ru/img/fk_btn/16.png"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center smalltext">
                            <p>Не является публичной офертой</p>                         
                        </div>
                        
                    </div>
                </div>
            </footer>           
        </div>
        
        <script src="js/jquery.min.js"></script>
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
        <script>
            var time = new Date();
            var month;
            if ($(window).width() <= '420') {
                if (String(time.getMonth() + 1).length == 1) 
                    month = '0' + Number(time.getMonth() + 1)
                else
                    month =  Number(time.getMonth() + 1)
                $('.time').html('Успей до ' + time.getDate() + '.' + month  + '.' + time.getFullYear());
            } else {
                if (String(time.getMonth() + 1).length == 1) 
                    month = '0' + Number(time.getMonth() + 1)
                else
                    month =  Number(time.getMonth() + 1)
                $('.time').html('до ' + time.getDate() + '.' + month  + '.' + time.getFullYear());
            }
            
        </script>
    </body>
</html>