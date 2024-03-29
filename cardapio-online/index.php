<?php
use app\core\Excecao;

require_once 'config/config.php';
require_once 'app/core/Core.php';
require_once 'app/helper/helper.php';
require_once 'vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

try{
    $core = new Core;
    $core->run();
}catch (Error | Exception $e){
    $erro = new Excecao($e);
    $erro->mostrar();
}



