<?php
$firstname = $_POST['user_firstname'];
$name = $_POST['user_name'];
$about = $_POST['user_about'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$phone = $_POST['user_phone'];
?>
<div>
Merci <?= $firstname.' '.$name ?>de nous avoir contacté à propos de <?= $about ?>.

Un de nos conseillers vous contactera soit à l\n’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : 

<?= $message ?>
</div>