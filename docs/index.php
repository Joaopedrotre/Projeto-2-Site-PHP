<?php
$page = $_GET['page'] ?? 'home';

$allowed_pages = [
    'home',
    'produtos',
    'representadas',
    'parceiros',
    'contato'
];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Nobre Representações</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/img/logo.png" alt="Logo" class="logo-navbar">
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">

                <ul class="navbar-nav mx-auto gap-3">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=produtos">
                            Produtos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=representadas">
                            Representadas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=parceiros">
                            Parceiros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contato">
                            Contato
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- CONTEÚDO -->
    <main>

        <?php include("includes/$page.php"); ?>

    </main>

    <!-- FOOTER -->
    <footer class="footer text-white mt-5">
        <div class="container py-5">

            <div class="row">

                <div class="col-md-4 mb-4">
                    <h4>Auto Nobre</h4>
                    <p>
                        Representação comercial especializada em
                        embalagens, filmes PVC, descartáveis
                        e soluções para empresas.
                    </p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Links rápidos</h5>

                    <ul class="list-unstyled">

                        <li>
                            <a href="index.php?page=produtos">
                                Produtos
                            </a>
                        </li>

                        <li>
                            <a href="index.php?page=representadas">
                                Representadas
                            </a>
                        </li>

                        <li>
                            <a href="index.php?page=contato">
                                Contato
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Contato</h5>

                    <p>
                        <i class="bi bi-telephone"></i>
                        (44) 99158-0220
                    </p>

                    <p>
                        <i class="bi bi-envelope"></i>
                        alemaotrevisan55@gmail.com
                    </p>

                    <p>
                        <i class="bi bi-geo-alt"></i>
                        Campo Mourão - PR
                    </p>
                </div>

            </div>

            <hr class="border-light">

            <div class="text-center">
                © 2026 Auto Nobre Representações
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>