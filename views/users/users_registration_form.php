<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . "/../../head.php";
start_page("Inscription");
?>

<h2>Inscription</h2>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <form action="controller/users/users_registration_ctrl.php" method="post" class="">
                <div class="user-name">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="user-mail">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="user-password">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="password-confirm">
                    <label for="password-conf" class="form-label">Confirmer le mot de passe :</label>
                    <input type="password" name="password-conf" class="form-control" required>
                </div>
                <div class="sub">
                    <input type="submit" value="S'inscrire">
                </div>


</div>