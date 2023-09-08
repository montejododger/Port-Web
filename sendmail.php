<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    mail("matthew.b.montejo@gmail.com", $subject, $message, "From:" . $email);
}
?>