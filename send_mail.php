<?php counter_chars(); ?>

<?php
function counter_chars(){
    $nbchar = strlen($_POST['content_mail']);
    $count = 500 - $nbchar;
    echo ('Le nombre de caractère est: ' .$nbchar. '!<br>');

    echo ('Il vous reste ' .$count. ' caractères !');
}

?>
