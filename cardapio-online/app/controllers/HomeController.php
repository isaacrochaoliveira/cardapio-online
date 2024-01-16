<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\HomeService;

class HomeController extends Controller {
    /**
     * Método Responsável por carregar a minha home
     */
    public function home() {
//        $data['food'] = HomeService::select("SELECT * FROM foods;");
        $data['active'] = 'Home';
        $data['view'] = 'Home/Index';
        
        $this->load("template", $data);
    }
}
