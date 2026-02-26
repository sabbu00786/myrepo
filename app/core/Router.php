<?php

class Router {

    public function run() {

        $url = $_GET['url'] ?? 'home/index';
        $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));

        $controllerName = ucfirst($url[0]) . 'Controller';
        $method = $url[1] ?? 'index';

        require_once __DIR__ . "/../controllers/$controllerName.php";

        $controller = new $controllerName();
        $controller->$method();
    }
}
