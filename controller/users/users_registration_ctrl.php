<?php
require_once __DIR__ . '/../../config.php';
include_once "../../notification.php";



if (session_status() === PHP_SESSION_NONE) session_start();

if ($_SERVER['REQUEST_METHOD']!== 'POST') {
    header ('Location: /views/users/users_registration_form.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$email_user = trim($_POST['email_user'] ?? '');
$password_user = trim($_POST['password_user'] ?? '');
$password_conf = trim($_POST['password_conf'] ?? '');

if (
    empty($username) ||
    empty($email_user) ||
    empty($password_user) ||
    empty($password_conf) 
) {
    header('Location: /views/users/users_registration_form.php?status=danger&message=Le formulaire est mal rempli');
    exit;
}

if ($password_user !== $password_conf) {
    header('Location: /views/users/users_registration_form.php?status=danger&message=Les mots de passe ne correspondent pas');
    exit;
}

try {
    $db = getPDO();

    $stmt = $db->prepare('SELECT id_user FROM user WHERE email_user = ?');
    $stmt->execute(['email_user']);
    if ($stmt->fetchAll()) {
        header('Location: /views/users/users_registration_form.php?status=danger&message=Erreur email ou mot de passe');
        exit;
    }

    $hashed_password = password_hash($password_user, PASSWORD_DEFAULT);

    $stmt = $db->prepare('INSERT INTO user (username, email_user, password_user) VALUES (?,?,?)');
    $stmt->execute([$username, $email_user, $hashed_password]);

    header('Location: /E-ScootSelect/views/users/users_login_form.php?status=success&message=Inscription réussie !');
    exit;
}catch (PDOException $e) {
    $message = $e->getMessage();
    header('Location: /E-ScootSelect/views/users/users_registration_form.php?status=danger&message=$message');
    exit;
}