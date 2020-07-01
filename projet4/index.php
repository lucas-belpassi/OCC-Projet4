<?php
//ROUTEUR : 
use app\Autoloader;

// On génère une constante qui contiendra le chemin vers index.php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

//Autoloader
require_once(ROOT . 'autoloader.php');
Autoloader::register();

if(!isset($_GET['p'])){
    $_GET['p'] = "chapters";
}
// On sépare les paramètres :
$params = explode('/', $_GET['p']);

// Test paramètre existe :
if ($params[0] != "") {
    //On récup le premier en controller
    $controller = ucfirst($params[0]);

    var_dump(__DIR__);
    // Si le deuxieme paramètre existe on le récupère sinon on va chercher index
    $action = isset($params[1]) ? $params[1] : 'index';

    // On récup le bon controller dans le bon dossier
    require_once(ROOT . 'controllers/' . $controller . '.php');

    //On instancie le controller :
    $controller = new $controller();

    // Si la méthode existe on appelle la méthode, sinon erreur 404 :
    if (method_exists($controller, $action)) {
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller, $action], $params);
    } else {
        http_response_code(404);
        echo "La page demandée n'existe pas";
    }
} else {
    $action = isset($params[1]) ? $params[1] : 'index';
    require_once(ROOT . 'controllers/Chapters.php');
    $controller = new Chapters();
    call_user_func_array([$controller, $action], $params);
}
