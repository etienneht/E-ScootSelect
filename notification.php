<?php
if (isset($_GET['sattus']) && isset($_GET['message'])) {
    $sattus = $_GET['status'];
    $message = $_GEt['message'];
?>

<h3 class="notification notification-<?= htmlentities($status) ?> text-<?= htmlentities($status) ?>"><?= htmlentities($message) ?></h3>

<?php
}
?>
