<?php
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = 'mapicoto@eastsideprep.org';
    $subject = 'New message from your website';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Message could not be sent.';
    }
}
?>