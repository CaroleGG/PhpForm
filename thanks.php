<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    

<?php

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
            $errors[] = "Le prénom est obligatoire";

        if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '') 
            $errors[] = "Le nom est obligatoire";

        if(!isset($_POST['phone']) || trim($_POST['phone']) === '') 
            $errors[] = "Le téléphone est obligatoire";

        if(!isset($_POST['email']) || trim($_POST['email']) === '' || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) 
            $errors[] = "L'email est obligatoire et dans le format nom@provider.com";

        
        
        if(!isset($_POST['about']) || trim($_POST['about']) === '') 
            $errors[] = "Le sujet est obligatoire"; 
        
        if(!isset($_POST['message']) || trim($_POST['message']) === '') 
            $errors[] = "Le message est obligatoire";     

        if(empty($errors)) {

            // traitement du formulaire
            $lastname = trim($_POST['lastname']);
            $firstname = trim(htmlspecialchars($_POST['firstname']));
            $email = trim(htmlspecialchars($_POST['email']));
            $phone = trim(htmlspecialchars($_POST['phone']));
            $about= trim(htmlspecialchars($_POST['about']));
            $message = trim(htmlspecialchars($_POST['message'])); 

        }
    }
?>

<?php // Affichage des éventuelles erreurs 
             if (count($errors) > 0) { ?>
                <div class="border border-danger rounded p-3 m-5 bg-danger">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php } else { ?>
            <div>
            Merci <?php echo(  $firstname.' '.$lastname .' ') ; ?>de nous avoir contacté à propos de <?php $about ;?>.
            <br />

            Un de nos conseillers vous contactera soit à l\n’adresse <?php $email ;?> ou par téléphone au <?php $phone ; ?> dans les plus brefs délais pour traiter votre demande : 

            <?php $message ;?>
            </div>
        <?php }; ?>    

</body>
</html>