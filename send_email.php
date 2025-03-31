<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "holiday190425@gmail.com";  // Замените на свой адрес
    $subject = "Приглашение на 80 летие";
    $name = $_POST['name'];
    $attendance = $_POST['attendance'];
    
    $message = "Имя: $name\n";
    $message .= "Будет ли участие: $attendance\n";
    
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}
?>
