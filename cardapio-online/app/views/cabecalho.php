<?php
switch ($active) {
    case 'Home':
        $home = 'active';
        $car = '';
        $quem = '';
        $carrinho = '';
        break;
    case 'Cardápio':
        $home = '';
        $car = 'active';
        $quem = '';
        $carrinho = '';
        break;
    case 'QuemSomos':
        $home = '';
        $car = '';
        $quem = 'active';
        $carrinho = '';
        break;
    case 'Carrinho':
        $home = '';
        $car = '';
        $quem = '';
        $carrinho = 'active';
        break;
    default:
        $home = '';
        $car = '';
        $quem = '';
        $carrinho = '';
        break;
}
?>
<nav class="py-2 bg-light-green text-white border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto my-auto">
            <li class="nav-item"><a href="<?= URL_BASE ?>" class="nav-link text-white px-2 <?= $home ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="<?= URL_BASE ?>home/produtos" class="nav-link text-white px-2" <?= $car ?>>Cardápio</a></li>
            <li class="nav-item"><a href="<?= URL_BASE ?>home/quemSomos" class="nav-link text-white px-2 <?= $quem ?>">Quem Somos</a></li>
            <li class="nav-item"><a href="<?= URL_BASE ?>home/card" class="nav-link text-white px-2 <?= $carrinho ?>">Carrinho</a></li>
        </ul>
        <ul class="nav">

        </ul>
    </div>
</nav>
<header class="py-3">
    <div class="container">
        <a href="<?= URL_BASE ?>" class="mb-3 mb-lg-0 link-body-emphasis text-decoration-none">
            <div class="d-flex flex-wrap justify-content-center">
                <div>
                    <span class="material-symbols-outlined size-60pt colors-orange">
                        local_pizza
                    </span>
                </div>
                <div>
                    <span class="size-36pt">Cardápio Online</span>
                </div>
            </div>
        </a>
    </div>
</header>