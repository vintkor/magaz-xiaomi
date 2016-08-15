<?
if(isset($_POST['number']) && isset($_POST['model'])){
        $to = 'mail@test1.organica.pp.ua,alkv84@yandex.ru';
        $subject = 'Обратный звонок с сайта Magaz-Xiaomi.dev';
        $message = '
                <html>
                    <head>
                        <title>Сообщение с сайта Magaz-Xiaomi.dev!</title>
                    </head>
                    <body>
                        <p><strong>Выбранная модель:</strong> '. $_POST['model'] .'</p>
                        <p><strong>Телефон клиента:</strong> '. $_POST['number'] .'</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Magaz-Xiaomi.dev\r\n";
        mail($to, $subject, $message, $headers);
}
