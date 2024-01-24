<?php

namespace app\models\service;

use app\core\Flash;

class LoginService {
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
        if (!(isset($_SESSION))) {
            session_start();
        }
        $_SESSION['id'] = $data[0]->id_usuario;
        $_SESSION['nome'] = $data[0]->usuario_nome;
        $_SESSION['email'] = $data[0]->usuario_email;
    }
}
