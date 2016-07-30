<?
if((isset($_POST['nizzame'])&&$_POST['nizzame']!="")&&(isset($_POST['emizzail'])&&$_POST['emizzail']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mcmaxdj@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'С сайта портфолио'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['nizzame'].'</p>
                        <p>e-mail: '.$_POST['emizzail'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
