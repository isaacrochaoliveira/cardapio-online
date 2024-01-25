<?php

namespace app\models\service;

use app\core\Controller;
use app\core\Flash;

class LoginService extends Controller{
    /**
     * Método Responsável por requirir uma query SQL completa e chama-lá para a execução retornando o resultado
     * @param string $sql
     */
    public static function select($sql, $eh_lista = true)
    {
        return Service::select($sql, $eh_lista);
    }

    /**
     * Responsável por autenticar meu login
     * @param string $email
     * @param string $senha
     */
    public static function authentic($email, $senha) {
        $data = self::select("SELECT * FROM usuarios WHERE usuario_email = '$email'");
        if (count($data) > 0) {
            if (password_verify($senha, $data[0]->usuario_senha)) {
                self::createSession($data);
                return true;
            }
        }
        Flash::setMsg('Usuário e/ou Senha Incorretos', -1);
        return false;
    }

    /**
     * Responsável por criar uma sessão para o usuário
     * @param stdClass $data
     */
    public static function createSession($data) {

        $_SESSION['usuario']['id'] = $data[0]->id_usuario;
        $_SESSION['usuario']['nome'] = $data[0]->usuario_nome;
        $_SESSION['usuario']['email'] = $data[0]->usuario_email;

        i($_SESSION);
    }

    /**
     * Resposável por proteger a páigna caso o usuário não esteja logado
     * @return bool
     */
    public static function protect() {
        if (!(isset($_SESSION))) {
            session_start();
        }

        if (!(isset($_SESSION['id']))) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Responsável por redirecionar o usuário caso não esteja logado
     */
    public static function close() {
        i("oi");
    }

}
