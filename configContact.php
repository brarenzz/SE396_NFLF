<?php

if(isset($_POST['submit'])) {

$to = "b@localhost.com";
$subject = "Contact";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$body = $_POST['message'];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = "From: $name_field\n E-Mail: $email_field\n Message:\n $body";

echo "Data has been submitted to $to!";
mail($to, $subject, $message, $headers);

} else {

echo "4! OH! 4!";

}
?>
