<?php
define('ROOT', __DIR__ . '/');


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
    $pdo = new PDO('mysql:host=localhost; dbname=escootselect; charset=utf8mb4', 'root', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
};