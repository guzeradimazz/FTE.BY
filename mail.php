<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$calcFrom = $_POST['calcFrom'];
$calcTo = $_POST['calcTo'];
$calcWeight = $_POST['calcWeight'];
$calcPhone = $_POST['calcPhone'];
$calcVolume = $_POST['calcVolume'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dguzerchuk@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'CSbTcfAadw5uXFu5wGe9'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('dguzerchuk@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('reg4ik@mail.ru');     // Кому будет уходить письмо
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body    = 'Откуда:' .$calcFrom . 'Куда: ' .$calcTo . 'Вес:' .$calcWeight . 'Объем:' .$calcVolume . 'Телефон:' .$calcPhone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>