<?php

require_once '../models/Database.php';
require_once '../models/Lawn.php';

// tableau d'erreurs pour les messages
$errors = [];
// variable permettant de gérer l'affichage du formulaire
$addLawn = false;


// Controle des inputs lors de la validation du formulaire
if (isset($_POST["btn-submit"])) {

    // Surface
    if (isset($_POST['surface'])) {
        if (empty($_POST['surface'])) {
            $errors['surface'] = 'Veuillez indiquer une surface valide';
        } else if (!is_int(intval($_POST['surface']))) {
            $errors['surface'] = 'Veuillez indiquer une surface valide';
        }
    }

    // Description
    if (isset($_POST['description'])) {
        if (empty($_POST['description'])) {
            $errors['description'] = 'Veuillez indiquer des informations';
        }
    }

    // Mail
    // Utilisation de filter_var pour le mail valide
    if (isset($_POST['mail'])) {
        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Veuillez indiquer un mail';
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Veuillez indiquer un mail valide';
        }
    }

    // Phone
    // Utilisation de filter_var pour le mail valide
    if (isset($_POST['phone'])) {
        if (empty($_POST['phone'])) {
            $errors['phone'] = 'Veuillez indiquer un numéro de contact';
        }
    }


    // Nous verifions si le tableau d'erreurs est vide 
    if (count($errors) == 0) {
        // Utilisation du htmlspecialchars pour s'assurer que les inputs sont safes
        $surface = htmlspecialchars($_POST['surface']);
        $description = htmlspecialchars($_POST['description']);
        $materiel = $_POST['materiel'] ?? 0;
        $mail = htmlspecialchars($_POST['mail']);
        $phone = htmlspecialchars($_POST['phone']);
        $date = date('Y-m-d');

        $lawn = new Lawn();
        if($lawn->addLawnQuote($date, $surface, $materiel, $description, $mail, $phone)){
            $addLawn = true;
        }
    }

}
