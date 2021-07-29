<?php

namespace App\Controllers;

use Core\Controller;

class Home extends Controller{

    public function index(){
        echo "<pre>";
        print_r($this->request);
        echo "</pre>";
        echo "primeira chamada de controller";
    }
}