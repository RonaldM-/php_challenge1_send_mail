<!--
//TODO[] Utilisez Bootstrap OU Fundation OU Material Design Light
//TODO[] Vérifiez si l’adresse e-mail est valide (utilisation des REGEX)
//TODO[x] Limiter la taille du message à 500 caractères
//TODO[] Laisser l’utilisateur ajouter plusieurs destinataires dans le champs email
//TODO[] Autoriser les emoji, le texte en gras, les images et même les vidéos youtube
//TODO[] Ou n’importe quoi d’autre que vous croyez être une fonctionnalité sympa !
-->
<?php
    include ('header.php');
?>

<body>

<form action="send_mail.php" method="post">
        À:
            <input type="email" name="Email" id="email" value="refd">
        <br>
        Cc:
            <input type="email" name="Email" id="email" value="refd">
        <br>
        Cci:
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


