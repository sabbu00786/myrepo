<?php

require_once __DIR__ . '/../core/Controller.php';

class HomeController extends Controller {

    public function index() {
        $data['title'] = "Welcome to MVC";
        $this->view('home/index', $data);
    }
}
