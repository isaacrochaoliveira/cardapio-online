<section id="produtos" class="first">
    <?php
        $this->verMsg();
        $this->verErro();
    ?>
    <div class="container mt-5">
        <div class="row">
            <?php
                for ($key = 0; $key < count($itens); $key++) {
                    ?>
                        <div class="col-md-3 pt-5" id="each_produto-card">
                            <div class="">
                                <img src="<?= URL_BASE ?>assets/image/home/<?= $itens[$key]->produto_foto ?>" width="180px" alt="<?= $itens[$key]->produto ?>">
                            </div>
                            <hr>
                            <h3 class="size-18pt font-roboto"><?= $itens[$key]->produto ?></h3>
                            <h6><?= numfmt_format_currency($formatter, $itens[$key]->produto_preco, "BRL") ?></h6>
                            <?php
                                if ($itens[$key]->carrinho == 'Sim') {
                                    ?>
                                    <a href="<?= URL_BASE ?>home/exc/<?= $itens[$key]->id_produto ?>" class="btn btn-exc w-100">Excluír do Carrinho</a>
                                    <?php
                                } else {
                                    ?>
                                        <a href="<?= URL_BASE ?>home/carrinho/<?= $itens[$key]->produto_url ?>" class="btn btn-carrinho w-100">Add ao Carrinho</a>
                                    <?php
                            }
                            ?>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>