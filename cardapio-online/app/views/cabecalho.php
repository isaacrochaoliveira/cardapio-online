<?php
if ($active == 'Home') {
    $home = 'active';
    $car = '';
} else {
    $home = '';
    if ($active == 'Cardápio') {
        $car = 'active';
    }
}
?>

<nav class="py-2 bg-light-green text-white border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto my-auto">
            <li class="nav-item"><a href="<?= URL_BASE ?>home" class="nav-link text-white px-2 <?= $home ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="<?= URL_BASE ?>home/produtos" class="nav-link text-white px-2" <?= $car ?>>Cardápio</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Quem Somos</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Notícias</a></li>
        </ul>
        <ul class="nav">
            <div>
                <i class="fa-solid fa-bag-shopping size-26pt"></i>
                <div class="text-center">
                    <p><?= count($carrinho) ?></p>
                </div>
            </div>
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