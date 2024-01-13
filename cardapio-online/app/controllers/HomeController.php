<?php

namespace app\controllers;

use app\core\Controller;

class HomeController extends Controller {
    /**
     * Método Responsável por carregar a minha home
     */
    public function home() {
        $data['view'] = 'Home/Index';
        
        $this->load("template", $data);
    }
}
