<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('ROOT', __DIR__ . '/');

function isUserLoggedIn(): bool {
    return isset($_SESSION['username']);
}

//Fonction qui charge un fichier

function load(?string $file)
{
    require ROOT . $file;
};

function start_page(string $title)
{
    load('head.php');
    //head_with_title($title);
    load('nav.php');
    
};

function getPDO()
{
    $pdo = new PDO('mysql:host=db; dbname=escootselect; charset=utf8mb4', 'root', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
};