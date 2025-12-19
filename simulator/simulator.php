<?php
require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../head.php";
start_page("Simulateur");
?>

<section class="simulator">
    <div class="container">
        <h2 class="text-center mb-4">🔻Simulateur de performances</h2>
        <form class="simu-form">
        
        <div class="input-group mb-4">
            <label>Poids de l'utilisateur (kg)</label>
            <input type="number" placeholder="Ex : 75" min="40" max="200" required>
        </div>
        <div class="input-group mb-4">
            <label>Capacité de la batterie (Ah)</label>
            <input type="number" id="battery" placeholder="Ex : 35" min="5" max="100" required>
        </div>
        <div class="input-group mb-4">
            <label>Puissance moteur totale (W)</label>
            <input type="number" id="power" placeholder="Ex ; 2 x 3000" value="6000" required>
        </div>
        <div class="input-group mb-4">
            <label>Mode de conduite</label>
            <select id="mode">
                <option value="bride">Bridé (vitesse limitée)</option>
                <option value="debride">Débridé (pleine puissance)</option>
            </select>
        </div>
            <small class="disclaimer">⚠️ Le mode <strong>débridé</strong> est réservé à une utilisation sur voie privée.</small>

            <button class="simulate">Simuler</button>
        </form>

        <div class="results">
            <p><strong>Vitesse estimée :</strong> - km/h</p>
            <p><strong>Autonomie estimée :</strong> - km</p>
        </div>
    </div>

</section>