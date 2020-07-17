<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   
    <title>Ваше сообщение успешно отправлено</title>
</script>
 
</head>
 
<body>
 
<?php
    $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
   
    if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['eml'])){
        $name = trim(strip_tags($_POST['name']));
        $phone = trim(strip_tags($_POST['phone']));
        $eml = trim(strip_tags($_POST['eml']));
        //var_dump($name);
        mail('dev4med@gmail.com', 'Письмо с Врачинадежды.рф', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$eml,"Content-type:text/html;charset=windows-1251");
        echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br> $back";
       
        exit;
    }
    else {
        echo "Для отправки сообщения заполните все поля! $back";
        exit;
    }
?>
</body>