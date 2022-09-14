<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$backName = $_POST['backName'];
$backPhone = $_POST['backPhone'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fortunaonline7@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '6faLkZQ1cqePXc1Pw2pZ';  // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('fortunaonline7@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('info@fte.by');     // Кому будет уходить письмо
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта(Обратный звонок)';
$mail->Body    = 'Имя: ' .$backName . ' Телефон: ' .$backPhone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>