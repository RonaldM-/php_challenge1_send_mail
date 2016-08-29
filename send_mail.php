<?php

    $botbot = 'botfrom@botland.fu';

    $to = $_POST["emailto"];

    $subject = $_POST["subject"];

    $message = $_POST["message"];

    $message = wordwrap($message, 70, "\r\n");
    $headers = $botbot;

mail($to, $subject, $message, $headers);

?>
