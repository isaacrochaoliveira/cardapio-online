<?php
define("SERVIDOR", "localhost");
define("BANCO", "cardapio_online");
define("USUARIO", "root");
define("SENHA", "");
define("CHARSET","UTF8");

define('CONTROLLER_PADRAO', 'home');
define('METODO_PADRAO', 'home');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');
define('TIMEZONE',"America/Sao_Paulo");
define('CAMINHO', realpath('./'));
define("TITULO_SITE","Cardápio Online");

define('URL_BASE', 'http://' . $_SERVER["HTTP_HOST"].'/projects/cardapio-online/cardapio-online/cardapio-online/');
define('URL_IMAGEM', "http://". $_SERVER['HTTP_HOST'] . "/projects/cardapio-online/cardapio-online/cardapio-online/assets/");
define("SESSION_LOGIN","usuario_agenda_logado");

define("VERSION", 'v1.0.0');

$config_upload["verifica_extensao"] = false;
$config_upload["extensoes"]         = array(".gif",".jpeg", ".png", ".bmp", ".jpg");
$config_upload["verifica_tamanho"]  = true;
$config_upload["tamanho"]           = 3097152;
$config_upload["caminho_absoluto"]  = realpath('./'). '/';
$config_upload["renomeia"]          = true;
