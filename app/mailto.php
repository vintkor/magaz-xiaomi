<?
if(isset($_POST['number']) && isset($_POST['model'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mail@test1.organica.pp.ua,alkv84@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов info@shparma.kiev.ua
        $subject = 'Обратный звонок с сайта Magaz-Xiaomi.dev'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>Сообщение с сайта Magaz-Xiaomi.dev!</title>
                    </head>
                    <body>
                        <p><strong>Выбранная модель:</strong> '. $_POST['model'] .'</p>
                        <p><strong>Телефон клиента:</strong> '. $_POST['number'] .'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Magaz-Xiaomi.dev\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
