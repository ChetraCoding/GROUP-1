<?php
session_start();
require 'models/register.model.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    empty($_POST['first-name']) || trim($_POST['first-name']) == "" ? $errors['first-name'] = "Please enter first name." : "";
    empty($_POST['last-name']) || trim($_POST['last-name']) == "" ? $errors['last-name'] = "Please enter last name." : "";

    empty($_POST['date'])? $errors['date'] = "Please select date." : "";
    empty($_POST['address'])? $errors['address'] = "Please select address." : "";

    getEmail($_POST['email'])? $errors['email'] = "Your email is already created." : "";
    filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? "": $errors['email'] = "Please enter a valide email.";

    strlen($_POST['password']) >= 8 ? "" : $errors['password'] = "Please enter more than 8 characters.";
    $_POST['password'] == $_POST['confirm-password'] ? "" : $errors['confirm-password'] = "Password not correct.";

    isset($_POST['terms'])? "" : $errors['terms'] = "Please check terms.";

    if (empty($errors)) {
        $encryptPass = password_hash($_POST['password'], PASSWORD_BCRYPT);

        createUser($_POST['first-name'], $_POST['last-name'], $_POST['date'], $_POST['address'], $_POST['email'], $encryptPass);
        $_SESSION["email"] = $_POST["email"];
        $_SESSION['first-name'] = $_POST['first-name'];
        header('Location: /');
    }
}

require "views/register/register.view.php";