<?php
    include ('header.php');
?>

<body>

<form action="send_mail.php" method="post">
        À:
            <input type="email" name="Email" id="email" value="refd">
        <br>
        Objet:
            <input type="text" name="Objet" placeholder="Enter Email's objet, please!">
        <br>
        <textarea name="text_email" id="text_email" cols="100" rows="20"  maxlength="500"></textarea>
        <p id="lastchars"></p>
        <br>
        <input type="submit" value="Send it!">
</form>
<script src="build/script/counter.js"></script>
<?php
    include('footer.php');
?>
