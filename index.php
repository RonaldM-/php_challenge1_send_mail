<!--
//TODO[x] Envoyer un mail
//TODO[] Utilisez Bootstrap OU Fundation OU Material Design Light
//TODO[x] Vérifiez si l’adresse e-mail est valide (utilisation des REGEX)
//TODO[x] Limiter la taille du message à 500 caractères
//TODO[] Laisser l’utilisateur ajouter plusieurs destinataires dans le champs email
//TODO[] Autoriser les emoji, le texte en gras, les images et même les vidéos youtube
//TODO[] Ou n’importe quoi d’autre que vous croyez être une fonctionnalité sympa !
-->
<?php
    include ('header.php');
?>

<body>

<form action="send_mail.php" method="post" enctype="multipart/form-data">
        À:
            <input type="email" name="email" id="emailto" value="">
        <br>
        Cc:
            <input type="email" name="emailcc" id="emailcc" value="">
        <br>
        Cci:
            <input type="email" name="emailcci" id="emailcci" value="">
        <br>
        Objet:
            <input type="text" name="subject" placeholder="Enter Email's objet, please!">
        <br>
        <textarea name="message" id="text_email" cols="100" rows="20"  maxlength="500"></textarea>
        <p id="lastchars"></p>
        <br>
        <input type="file" name="file">
        <input type="submit" value="Send it!">
</form>
<script src="build/script/counter.js"></script>
<?php
    include('footer.php');
?>

