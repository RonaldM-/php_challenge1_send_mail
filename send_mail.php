<?php
$email= $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $botbot = 'botfrom@botland.fu';
    $cci = $_POST['emailcci'];
    $bcc = $_POST['emailcc'];

    $to = $_POST["emailto"];

    $subject = $_POST["subject"];

    $message = $_POST["message"];

    $message = wordwrap($message, 70, "\r\n");
    $headers .= "From: $botbot" . "\r\n";
    $headers .= "Cc: $cc". '\r\n';
    $headers .= "Bcc: $bcc". "\r\n";
mail($to, $subject, $message, $headers);
    echo "I did my job, your email has been sent!";
}
else {
    echo "L'adresse suivante " .'"'.$email.'"'. " est invalide. <br><a href='index.php' role='button'><button>Try again , please!</button></a>";
}
?>
