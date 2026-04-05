<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $phone === '' || $message === '') {
    echo "يرجى تعبئة الاسم، رقم الجوال، وتفاصيل الطلب.";
    exit;
}

$name    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$email   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$service = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$to      = "9o9o9de@gmail.com"; // عدّلها
$subject = "طلب تواصل جديد من موقع نَسَق";
$body    = "الاسم: {$name}\n"
         . "رقم الجوال: {$phone}\n"
         . "البريد: {$email}\n"
         . "نوع الخدمة: {$service}\n"
         . "تفاصيل الطلب:\n{$message}\n";

$headers = "From: noreply@yourdomain.com\r\n";
if ($email !== '') {
    $headers .= "Reply-To: {$email}\r\n";
}

if (@mail($to, $subject, $body, $headers)) {
    echo "شكرًا لتواصلك معنا. تم استلام طلبك وسيتم التواصل معك قريبًا.";
} else {
    echo "تم استلام طلبك. تأكد من إعدادات البريد في الخادم لإرسال الرسائل بشكل صحيح.";
}
