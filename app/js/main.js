$(document).ready(function() {



    /*-------------------------------- Плавная анимация по меню ---------------------------------*/

    $(".bounce").on("click", "a", function(event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({
            scrollTop: top
        }, 800);
    });

    /*------------------------------- Получение JSON с отправленных данных -----------------------------*/

    $(".ajaxform").submit(function() {
        var form = $(this);
        var error = false;
        if (!error) {
            var data = form.serialize();

            function success(returneData) {
                console.log(returneData);
            }
            $.ajax({
                type: 'POST',
                url: 'json.php',
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

    $(function() {
        $('#Container').mixItUp();
    });

    /*------------------------------- Button to TOP -----------------------------*/

    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
        });
    });

    /*------------------------------- Маска для поля номера телефона -----------------------------*/

    jQuery(function($) {
        $("#number").mask("8 (999) 999-99-99");
    });


    /*------------------------------- Owl.Carousel -----------------------------*/

    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        navText: ['&larr;', '&rarr;'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

});
