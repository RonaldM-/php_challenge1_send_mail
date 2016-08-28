<?php
    $to = '';
    $subject = '';
    $message = '';
    $message = wordwrap($message, 70, "\r\n");
    $headers = '';

mail($to, $subject, $message, $headers);
?>
