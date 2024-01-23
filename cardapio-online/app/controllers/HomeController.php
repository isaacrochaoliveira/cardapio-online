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
        $data['active'] = 'Home';
        $data['view'] = 'Home/Index';
        $data['carrinho'] = HomeService::select("SELECT * FROM carrinho");
        
        $this->load("template", $data);
    }

    /**
     * Método Responsável por carregar a minha página com todos os produtos
     */
    public function produtos() {
        $data["itens"] = $this->obterProdutos(HomeService::select("SELECT * FROM produtos"));
        $data['carrinho'] = HomeService::select("SELECT * FROM carrinho");
        $data['active'] = 'Cardápio';
        $data['formatter'] = numfmt('pt_BR');
        $data['view'] = 'Home/Produtos';

        $this->load("template", $data);
    }

    /**
     * Método Responsável por adicionar o produto ao carrihno
     * @param string $produto
     */
    public function carrinho($produto) {
        $carrinho = new \stdClass();

        $data['produto'] = HomeService::select("SELECT * FROM produtos WHERE produto_url = '$produto'");

        $carrinho->id_produto = $data["produto"][0]->id_produto;
        $carrinho->carrinho_insert = date('Y-m-d');

        HomeService::salvar($carrinho, 'id_carrinho', 'carrinho');
        Flash::setForm('Adicionado ao Carrihno');
        $this->redirect(URL_BASE . 'home/produtos');
    }

    /**
     * Método Responsável por obter todos os produtos
     * @param \stdClass $data
     */
    public function obterProdutos($data) {
        $data = HomeService::select("SELECT * FROM produtos");
        for ($key = 0; $key < count($data); $key += 1) {
            $carrinho = HomeService::select("SELECT * FROM carrinho WHERE id_produto = " . $data[$key]->id_produto);
            if () {

            }
        }
    }
}
