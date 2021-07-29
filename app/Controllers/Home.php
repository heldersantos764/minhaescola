<?php

namespace App\Controllers;

use Core\Controller;

class Home extends Controller{

    public function index(){
        $this->request->addName('Testando referencia');       
    }
}