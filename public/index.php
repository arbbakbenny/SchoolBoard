<?php

require ".." . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


error_reporting(E_ALL);

$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(true);

$builder->addDefinitions([
    PDO::class => function ($container) {
        return new PDO("sqlite:../database/studentboard.sqlite");
    }
]);

$container = $builder->build();

$router = $container->get(AltoRouter::class);
$router instanceof AltoRouter;

require ".." . DIRECTORY_SEPARATOR . "routes.php";

$match = $router->match();

if( is_array($match) ) {
    
    if (is_callable( $match['target'] )) {
        call_user_func_array( $match['target'], $match['params'] );
    } else {
        try {
            $parts = explode("#", $match['target']);
            $class = $parts[0];
            $method = $parts[1];
            $controller = $container->get($class);

            return call_user_func([$controller, $method], ...array_values($match['params']));
        } catch (Throwable $ex) {
            var_dump($ex->getMessage());
            var_dump($ex->getTrace());
            throw $ex;
        }
    }
} else {
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}