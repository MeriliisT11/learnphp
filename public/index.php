<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function($class){
    $class = substr($class, 4);
    dump($class);
    require_once "src/$class.php";
});


// require_once 'src/Router.php';
// require_once 'src/DB.php';

use App\Controllers\PublicController as PC;

$router = new App\Router();
$db = new App\DB();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PublicController();
$controller = new PublicController();
$controller = new PublicController();
$controller = new PublicController();
$controller = new PublicController();
dump($router, $db, $controller);

// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $posts = [
//             ['title' => 'Some title 1', 'body' => 'Some body 1'],
//             ['title' => 'Some title 2', 'body' => 'Some body 2'],
//             ['title' => 'Some title 3', 'body' => 'Some body 3'],
//             ['title' => 'Some title 4', 'body' => 'Some body 4'],
//         ];
//         include 'views/index.php';
//         break;
//     case '/us':
//         $posts = [
//             ['title' => 'Some Tech title 1', 'body' => 'Some Tech body 1'],
//             ['title' => 'Some Tech title 2', 'body' => 'Some Tech body 2'],
//             ['title' => 'Some Tech title 3', 'body' => 'Some Tech body 3'],
//             ['title' => 'Some Tech title 4', 'body' => 'Some Tech body 4'],
//         ];
//         include 'views/us.php';
//         break;
//     case '/tech':
//         $posts = [
//             ['title' => 'Some US title 1', 'body' => 'Some US body 1'],
//             ['title' => 'Some US title 2', 'body' => 'Some US body 2'],
//             ['title' => 'Some US title 3', 'body' => 'Some US body 3'],
//             ['title' => 'Some US title 4', 'body' => 'Some US body 4'],
//         ];
//         include 'views/tech.php';
//         break;
//     default: 
//         echo 'ERROR 404';
// }
