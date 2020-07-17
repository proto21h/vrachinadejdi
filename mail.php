<?php
    //Принимаем постовые данные
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['eml'];
    //Тут указываем, на какой ящик посылать письмо
    $to = "dev4med@gmail.com";
    //Далее идет тема и само сообщение
    // Тема письма
    $subject = "Заявка с сайта: Врачинадежды.рф";
    // Сообщение письма
    $message = "
    Имя пользователя: ".htmlspecialchars($name)."<br>
    Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>
    Email: ".htmlspecialchars($email)."</br>";
    // Отправляем письмо при помощи функции mail();
    $headers = "From: stastroi.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
    mail ($to, $subject, $message, $headers);
    // Перенаправляем человека на страницу благодарности и завершаем скрипт (если без ajax)
    header('Location: thanks.html');
    exit();
?>