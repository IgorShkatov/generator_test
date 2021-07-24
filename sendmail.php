<?php





$email = $_POST['email'];
$tel = $_POST['tel'];

$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);

$email = trim($email);
$tel = trim($tel);




//var_dump($tel);
//var_dump(strlen($tel));

//echo $email;
//echo "<br/>";
////echo $tel;

$mailTo = false;

if (strlen($tel) >= 18){
    echo "Email адрес'$email'указан верно.\n";
    echo "<br>";
    echo "Телефон'$tel'указан верно.\n";
    echo "<br>";
    $mailTo = true;
}elseif (strlen($tel) < 18){
    echo "<script>alert(\"Телефон должен содержать 11 символов\");</script>";
    echo "<br>";
    echo "Ведите 11 символов телефона "."<a href='index.php'>Назад к форме<a/>";
}elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<script>alert(\"Введите корректный email\");</script>";
    echo "<br>";
    echo "Ведите корректный email "."<a href='index.php'>Назад к форме<a/>";
}

////29594299.105853@parser.amocrm.ru
//
if ($mailTo){
    $to  = "<testgenerator735@gmail.com>, " ;
    $to .= "order@salesgenerator.pro";

    $subject = "Заявка с сайта";

    $message ="Заявка Шкатов"."Email:".$email.". Телефон: ".$tel;

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    mail($to, $subject, $message, $headers);
    echo "сообщение успешно отправлено на почту order@salesgenerator.pro "."<a href='index.php'>Назад к форме<a/>";
}else {
    echo "при отправке сообщения возникли ошибки"."<a href='index.php'>Назад к форме<a/>";
};



//mail("order@salesgenerator.pro", "Заявка с сайта", "Email:".$email.". Телефон: ".$tel ,"From: example2@mail.ru \r\n");
//mail("testgenerat@yandex.ru", "Заявка с сайта", "Email:".$email.". Телефон: ".$tel ,"From: example2@mail.ru \r\n");