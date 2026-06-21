<?php

$categoriaSelecionada = $_GET['categoria'] ?? 'todos';

//ADICIONAR SELECT FROM BANCO DE DADOS DEPOIS

$produtos = [

    // COPOS

    [
        'nome' => 'Copo 180ml Estriado',
        'categoria' => 'copos',
        'imagem' => 'assets/img/produtos/Copo-Branco-PP-180-ml.png'
    ],

    [
        'nome' => 'Copo 330ml Chopp Liso',
        'categoria' => 'copos',
        'imagem' => 'assets/img/produtos/Produtos-sem-fundo-Copo-PP-330-ml-1.png'
    ],

    [
        'nome' => 'Copo 550ml Liso',
        'categoria' => 'copos',
        'imagem' => 'assets/img/produtos/Copo-Transparente-liso-PP-550-ml.png'
    ],

    // MARMITAS

    [
        'nome' => 'Marmita P - 500ml',
        'categoria' => 'marmitas',
        'imagem' => 'assets/img/produtos/SITE-Marmita-M32-2.png'
    ],

    [
        'nome' => 'Marmita M - 700ml',
        'categoria' => 'marmitas',
        'imagem' => 'assets/img/produtos/Marmita-M50-1.png'
    ],

    [
        'nome' => 'Marmita G - 900ml',
        'categoria' => 'marmitas',
        'imagem' => 'assets/img/produtos/M65.png'
    ],

    // TALHERES

    [
        'nome' => 'Garfo Master',
        'categoria' => 'talheres',
        'imagem' => 'assets/img/produtos/Garfo-Master-Branco-Com-Fundo.png'
    ],

    [
        'nome' => 'Faca Master',
        'categoria' => 'talheres',
        'imagem' => 'assets/img/produtos/Faca-Master-Branca-Com-Fundo-1.png'
    ],

    [
        'nome' => 'Colher Master',
        'categoria' => 'talheres',
        'imagem' => 'assets/img/produtos/Colher-Master-Branco.png'
    ]


];

?>

<section class="produtos">

    <div class="container">

        <h1 class="text-center mb-3">

            Produtos Ultra Descartáveis

        </h1>

        <!-- FILTRO -->

        <div class="row justify-content-center mb-5">

            <div class="col-md-5">

                <form method="GET">

                    <input
                        type="hidden"
                        name="page"
                        value="produtos">

                    <select
                        name="categoria"
                        class="form-select filtro-produtos"
                        onchange="this.form.submit()">

                        <option value="todos">

                            Todos os produtos

                        </option>

                        <option
                            value="copos"

                            <?= $categoriaSelecionada == 'copos' ? 'selected' : '' ?>>

                            Copos

                        </option>

                        <option
                            value="talheres"

                            <?= $categoriaSelecionada == 'talheres' ? 'selected' : '' ?>>

                            Talheres

                        </option>

                        <option
                            value="marmitas"

                            <?= $categoriaSelecionada == 'marmitas' ? 'selected' : '' ?>>

                            Marmitas

                        </option>

                    </select>

                </form>

            </div>

        </div>

        <!-- CARDS -->

        <div class="row g-4 justify-content-center">

            <?php

            foreach ($produtos as $produto) {

                if (
                    $categoriaSelecionada != 'todos' &&
                    $produto['categoria'] != $categoriaSelecionada
                ) {

                    continue;
                }

            ?>

                <div class="col-md-4">

                    <div class="card produto-card h-100">

                        <img

                            src="<?= $produto['imagem'] ?>"

                            class="card-img-top"

                            alt="<?= $produto['nome'] ?>">

                        <div class="card-body text-center">

                            <h5>

                                <?= $produto['nome'] ?>

                            </h5>

                            <p>

                                <strong>

                                    Categoria:

                                </strong>

                                <?= ucfirst($produto['categoria']) ?>

                            </p>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</section>