<section id="card" class="first">
    <header id="header">
        <h1>Carrinho</h1>
    </header>
    <div class="folha-fundo py-5">
        <div class="container">
            <h3>Produtos Adicionados</h3>
            <div class="d-flex flex-wrap">
            <hr>
                <?php
                    for ($key = 0; $key < count($produtos); $key += 1) {
                        ?>
                            <div class="col-md-6">
                                <div class="d-flex flex-wrap">
                                    <div class="">
                                        <img src="<?= URL_BASE ?>assets/image/home/<?= $produtos[$key]->produto_foto ?>" width="200px">
                                    </div>
                                    <div class="mx-3">
                                        <h4 class="size-24pt"><?= $produtos[$key]->produto ?></h4>
                                        <p><?= numfmt_format_currency($formatter, $produtos[$key]->produto_preco, 'BRL') ?></p>
                                        <a href="<?= URL_BASE ?>home/delete_carrinho/<?= $produtos[$key]->produto_url ?>">
                                            <span class="material-symbols-sharp text-danger">
                                                delete_forever
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>