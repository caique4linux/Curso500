<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once './PHPMailer-6.1.4/src/PHPMailer.php';
require_once './PHPMailer-6.1.4/src/SMTP.php';

$email = new PHPMailer();
$email->setLanguage('pt_br', './lib/PHPMailer-6.1.4/language');
$email->isSMTP();
$email->Host = 'smtp.gmail.com';
$email->Port = 587;
$email->SMTPSecure = 'tls';
$email->SMTPAuth = true;
$email->CharSet = PHPMailer::CHARSET_UTF8;
$email->Username = 'becapizzaiola@gmail.com';
$email->Password = '123mudar@';
$email->setFrom('becapizzaiola@gmail.com', 'Curso de PHP 7');
$email->addAddress('caique.portela@4linux.com.br');
$email->addAddress('caique.portela@4linux.com.br');
$email->Subject = 'Teste no curso de PHP';
$email->isHTML(true);
$email->Body = '<h1>Enviei com o PHP!</h1>';

if (!$email->send()) {
    print("Erro: {$email->ErrorInfo}");
} else {
    print("E-mail enviado!");
}