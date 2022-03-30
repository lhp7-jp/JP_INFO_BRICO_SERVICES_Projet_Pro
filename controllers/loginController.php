<?php

$login = '$2y$10$07yhwO4ma.HJw2mXrHIWZOOOn22eRmUuhSzvBaFOGmEU5jDusFqsm';
$password = '$2y$10$dXJwamV62xP3HtdIw7rmn.byTQkaWgrFVhZ1O/FVtq97MqXv3qh2y';
$errors = [];

if (isset($_POST["btn-connection"])) {
    if (empty($_POST["login"]) || empty($_POST["password"])) {
        $errors['login'] = 'Veuillez remplir tous le champs';
    } else {
        if (!password_verify($_POST["password"], $password) && !password_verify($_POST["login"], $login)) {
            $errors['login'] = 'Mauvais identifiant ou mot de passe';
        } else {
            $_SESSION['admin'] = 'Admin';
            header('Location: admin.php');
            exit();
        }
    }
}
