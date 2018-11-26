<?php 
    use AztecGameStudios\Core\Config;
    use AztecGameStudios\Core\Router;
    use AztecGameStudios\Core\Requests;

    require_once __DIR__ . '\..\vendor\autoload.php';

    $config = new Config();

    $db = $config->get('db');

    $loader = new Twig_Loader_Filesystem(__DIR__ . '\..\views');
    $view = new Twig_Environment($loader);

    $router = new Router();
    $response = $router->route(new Requests()); 
    echo $response;
?>
