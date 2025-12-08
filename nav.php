<?php
require_once __DIR__ . "/config.php"
?>

<header class="header">

        <div class="logo-zone">
            <img class="logo" src="/E-ScootSelect/public/images/img/file_00000000ecb471f4a4f14dea1b961cb9(2).png" alt="Logo E-ScooterSelect">

            <div class="title-zone">
                <h1>E-ScootSelect</h1>
                <p class="slogan">Compare. Simule. Ride <span>⚡</span></p>
            </div>
        </div>

        <div class="search-bar">
            <input type="text" id="search" placeholder="Rechercher un modèle...">
            <button id="search-button" title="Rechercher">
                <img src="/E-ScootSelect/public/images/img/icons8-loupe.svg" alt="loupe rechercher">
            </button>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="homepage.php">Accueil/Comparateur</a></li>
                <li><a href="simulator/simulator.php">Simulateur</a></li>
                <li><a href="views/users/users_registration_form.php">Inscription</a></li>
                <li><a href="views/users/users_login_form.php">Connexion</a></li>
            </ul>
        </nav>

    </header>
