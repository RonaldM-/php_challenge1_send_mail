<?php
//Solution Regex:
//
//
//if(preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9]{4}\.[a-zA-Z]{2,4}$#",$_POST['email'])){    
//    echo('oui');
//}
//else{
//    echo("ce n'ai pas une adresse mail");
//}

//Solution FILTER_VALIDATE_EMAIL
$email= $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('send_mail.php');
}
else {
    echo "Cette ($email_a) adresse email est considérée comme invalide.";
}
?>


