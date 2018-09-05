<?php
$email = $_POST['email'];
$question = $_POST['comments'];



$email = htmlspecialchars($email);
$question = htmlspecialchars($question);


$email = urldecode($email);
$question = urldecode($question);


$email = trim($email);
$question = trim($question);

mail("vse-like@yandex.ru", "Новый вопрос", "Новый вопрос \r\n". "E-mail:".$email."\r\n. Сообщение: ".$question ."\r\n");
?>
<div class="row">
                    <div class="col-md-12">
                        <div id="message" class="text-center" style="display: block;"><fieldset><div id="success_page"><h3>Письмо успешно отправлено.</h3><p>Спасибо за Ваше обращение.<br>Время ожидания ответа от 1 до 24 часов.</p></div></fieldset></div>
                        <form action="php/contact.php" class="" name="cform" id="cform" method="post" style="display: none;">                       
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