<?php 
    $itens_de_menu = ["Principal Results", "Institutional", "Admin"];
?>

<nav class="main-header navbar navbar-expand navbar-orange navbar-light font-weight-bold">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item text-light">
            <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <?php for($i = 0; $i < count($itens_de_menu); $i++): ?>
        <li class="nav-item d-none text-light d-sm-inline-block">
            <a href="<?= $i === 0 ? '../index.php' : ($i === 1 ? 'page2.php' : 'page3.php') ?>"
                class="nav-link text-light"><?= $itens_de_menu[$i] ?></a>
        </li>
        <?php endfor; ?>

    </ul>
</nav>
