(function($) { 
	"use strict";
	
jQuery(document).ready(function(){
	$('#payform').submit(function(){

		var action = $(this).attr('action');

		$("#pmessage").slideUp(750,function() {
			$('#pmessage').hide();
			$('#submit') 
			var reg_mail = /[0-9a-z_]+@[0-9a-z_^.]+.[a-z]{2,3}/i;
			var reg_publicaton = /\/p\//i;
			//var reg_publicaton = new RegExp ("/p/", i);
			var em = $('#em').val();
			var sign = $('#s').val();
			var order_id = $('#o').val();
			var price = $('#sum').val();
			var us_url  = $('#us_url').val();
			if (em == '') {
				$('#pmessage').slideDown('slow');
				document.getElementById("pmessage").innerHTML = '<div class="error_message">Пожалуйста, введите корректный e-mail адресс</div>';
			} else if(reg_mail.exec(em) == null){
				$('#pmessage').slideDown('slow');
                document.getElementById("pmessage").innerHTML = '<div class="error_message">Вы ввели некорректный email-адрес, попытайтесь еще</div>';
            } else if(us_url == '') {
				$('#pmessage').slideDown('slow');
				document.getElementById("pmessage").innerHTML = '<div class="error_message">Введите логин или ссылку на профиль</div>';
			} else {
				document.getElementById("pmessage").innerHTML = '<h3>Успешно принято</h3>';
				// window.location.href=`php/megakassa/ig-payout.php/?o=${order_id}&em=${em}&us_url=${us_url}&sign=${sign}`;
				//window.location.href=`php/freekassa/ig-payout.php/?o=${order_id}&em=${em}&us_url=${us_url}&sign=${sign}`;
				window.location.href=`http://www.free-kassa.ru/merchant/cash.php?m=74958&oa=${price}&o=${order_id}&s=${sign}&lang=ru&i=&em=${em}&us_url=${us_url}`;
			}	
		});
		return false;
	});

});

}(jQuery));