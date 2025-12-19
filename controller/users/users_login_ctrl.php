<?php

require_once __DIR__ . '/../../config.php';

$db = getPDO();

//---- Récupération des données du formulaire ----//
$email= trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');


//---- Vérification des champs vides ----//
if (
    empty($email) ||
    empty($password)
) {
    header('Location: /views/users/users_login_form.php?status=warningémessage=Veuillez remplir tous les champs');
    exit;
}

$sql = $db->prepare('SELECT * FROM user WHERE email_user = ?');
$sql->execute([$email]);
$user = $sql->fetch(PDO::FETCH_ASSOC);

//---- Vérification du mot de passe hashé ----//
if ($user && password_verify($password, $user['password_user'])) {

    //---- Stocker l'utilsateur dans la session ----//
    $_SESSION['user'] = [
        'id' => $user['id_user'],
        'username' => $user['username'],
        'email' => $user['email_user']
    ];

    header('Location: /E-ScootSelect/index.php?status=success&message=Connexion réussie !');
    exit;

}else {
    header('Location: views/users/users_login_form.php?status=danger&message=Identifiants incorrects !');
    exit;
}