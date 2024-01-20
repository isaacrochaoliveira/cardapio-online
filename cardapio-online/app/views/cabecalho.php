<?php
switch ($active) {
    case 'Home':
        $class = 'active';
        break;
    default:
        $class = '';
}
?>

<nav class="py-2 bg-light-green text-white border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link text-white px-2 <?= $class ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Cardápio</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Quem Somos</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Notícias</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="#" class="btn btn-contact">Contato</a></li>
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