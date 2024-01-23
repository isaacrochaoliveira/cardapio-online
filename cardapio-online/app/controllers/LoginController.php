<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\LoginService;

class LoginController extends Controller {
    /**
     * Resposável por retornar o nome da tabela que irá autenticar o login
     * @var string $tabela
     */
    private $tabela = 'usuarios';

    /**
     * Responsável por retornar o nome da minha chave primária
     * @var string $id
     */
    private $id = 'id_usuario';

    /**
     * Responsável por autenticar o login
     */
    public function authentic() {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';


    }
}
