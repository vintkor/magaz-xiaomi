/*-------------------------------- Плавная анимация по меню ---------------------------------*/
 
$(document).ready(function(){
	$(".bounce").on("click","a", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 800);
	});
});

/*------------------------------- Отправка почты ---------------------------------*/

$(document).ready(function (){
	$(".ajaxform").submit(function(){
		var form = $(this);
		var error = false;
		if (!error) {
			var data = form.serialize();
			function success(returneData) {
				console.log(returneData);
			}
			$.ajax({
				type: 'POST', 
				url: 'mailto.php',
				dataType: 'json',
				data: data, 
				success: function(data) {
					var model = data.value;
					$('#hidden-jquery').val(model);
				}
			});
		}
		return false; 
	});
});
