<?
if(isset($_GET['phone'])&&$_GET['phone']!=""){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'avallonis24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Запись на курс '; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_GET['name'].'</p>
                        <p>Телефон: '.$_GET['phone'].'</p>
                        <p>E-mail: '.$_GET['email'].'</p>                     
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: avallonis@avallonis.pro\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>