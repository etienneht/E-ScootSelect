<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../head.php';
start_page("Connexion");
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-4">

        <h2 class="text-center mb-4">Connexion</h2>

        <form action="controller/users/users_login_ctrl.php" method="post" novalidate class="border p-5 rounded" style="box-shadow: 0 0 30px rgba(0,0,0,0.8)">
            <div class="mb-4">
                <label for="email" class="form-label">Email <span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control" required>
                <div class="form-text " style="font-size: 0.6rem; color: white;">* Ce champ est obligatoire</div>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Mot de passe <span style="color:red">*</span></label>
                <input type="password" name="password" class="form-control" required>
                <div class="form-text" style="font-size: 0.6rem; color: white;">* Ce champ est obligatoire</div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Se connecter</button>
        </form>
    </div>
</div>