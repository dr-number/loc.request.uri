<?php
    include_once "./conctants.php";

$subject = "ПРОипотека. Опрос";

$initalFee = $_POST['question1'];
$confrimIncome = $_POST['question5'];
$isExistCredits = $_POST['question3'];

$name = $_POST['contact_field_0'];
$phone = $_POST['contact_field_1'];
$mail = $_POST['contact_field_2'];
$urgently = $_POST['contact_field_3'];

$message = ' <p>Клиент: </p><b>'.$name.'</b></br>
             <p>Телефон: </p><b>'.$phone.'</b></br>
             <p>E-mail: </p><b>'.$mail.'</b></br>
             <p>Какой можете внести первоначальный взнос: </p></br><b>'.$initalFee.'</b></br>
             <p>Вы можете документально подтвердить свои доходы?: </p></br><b>'.$confrimIncome.'</b></br>
             <p>Были ли ранее кредиты?: </p></br><b>'.$isExistCredits.'</b>
             </br>
             ';

$headers  = $HEADER;
$headers .= "From: От кого письмо ".$ADDRESS."\r\n";
$headers .= "Reply-To: ".$ADDRESS."\r\n";

$result = mail($ADDRESS, $subject, $message, $headers);

unset($_POST['question1']);
unset($_POST['question5']);
unset($_POST['question3']);

unset($_POST['contact_field_0']);
unset($_POST['contact_field_1']);
unset($_POST['contact_field_2']);
unset($_POST['contact_field_3']);

header('Location: /?statusMail='.$result);