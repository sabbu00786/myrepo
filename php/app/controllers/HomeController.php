<?php

require_once '../app/core/Controller.php';

class HomeController extends Controller {

    public function index() {
        $data['title'] = "goodmorning  to evryone";
        $this->view('home/index', $data);
    }
}

