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
     * Método Responsável por carregar a página de Login
     */
    public function home() {
        $data['view'] = 'login';
        $data['active'] = '';

        $this->load('template', $data);
    }

    /**
     * Responsável por autenticar o login
     */
    public function authentic() {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        if (LoginService::authentic($email, $senha)) {
            $this->redirect(URL_BASE . 'home');
        } else {
            $this->redirect(URL_BASE);
        }
    }

    /**
     * Responsável por fazer o logoff do usuário
     */
    public function logoff() {
        if (!(isset($_SESSION))) {
            session_start();
        }

        if (isset($_SESSION['usuario']['id'])) {
            session_destroy();
            $this->redirect(URL_BASE);
        }
    }
}
