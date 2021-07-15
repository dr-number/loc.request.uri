<?php
    error_reporting(0);
    include_once "./conctants.php";

$subject = "ПРОипотека. Заявка";

$name = $_POST['name'];
$phone = $_POST['phone'];

$message = ' <p>Имя</p> 
            </br>
             <b>'.$name.'</b>
             </br>
             <p>Телефон</p> 
             </br>
             <b>'.$phone.'</b>';

$headers  = $HEADER;
$headers .= "From: От кого письмо ".$ADDRESS."\r\n";
$headers .= "Reply-To: ".$ADDRESS."\r\n";


if(mail($ADDRESS, $subject, $message, $headers))
    $result = "Заявка успешно отправлена!";
else
    $result = "Ошибка при отправке заявки!";

unset($_POST['name']);
unset($_POST['phone']);

//header('Location: ?statusMail='.$result);

//$result =  json_encode(array("result" => $result));
echo $result;

//echo '{"result":"true"}';

//echo '{"aboutCompany": {"name": "ПРОИПОТЕКА"}}';

//echo "Отправка";