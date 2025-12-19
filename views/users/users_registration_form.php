<?php
require_once __DIR__ . '/../../config.php';
include_once "../../notification.php";
start_page("Inscription");
?>


<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-4">

        <h2 class="text-center mb-4">Inscription</h2>

        <form action="/E-ScootSelect/controller/users/users_registration_ctrl.php" method="post" class="border p-5 rounded" style="box-shadow: 0 0 30px rgba(255,30,30,0.4)">
                <div class="mb-4">
                    <label for="username" class="form-label">Nom d'utilisateur <span style="color:red">*</span></label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label for="email_user" class="form-label">Email <span style="color:red">*</span></label>
                    <input type="email" name="email_user" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label for="password_user" class="form-label">Mot de passe <span style="color:red">*</span></label>
                    <input type="password" name="password_user" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label for="password_conf" class="form-label">Confirmer le mot de passe <span style="color:red">*</span></label>
                    <input type="password" name="password_conf" class="form-control" required>
                </div>
                <div class="form-text mt-3" style="font-size: 0.6rem; color: white;"> <span style="color:red">*</span> Ces champs sont obligatoires</div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50 mt-4">S'inscrire</button>
                </div>
    </div>
</div>