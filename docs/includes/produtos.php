<?php

require_once __DIR__ . '/../config/conexao.php';

$categoriaSelecionada = $_GET['categoria'] ?? 'todos';

$stmtCategorias = $pdo->query(
    "SELECT * FROM categorias ORDER BY nome"
);

$categorias = $stmtCategorias->fetchAll(PDO::FETCH_ASSOC);

$sql = "

SELECT

produtos.id_produto,

produtos.nome,

produtos.descricao,

produtos.imagem,

categorias.nome AS categoria

FROM produtos

INNER JOIN produto_categoria

ON produtos.id_produto = produto_categoria.id_produto

INNER JOIN categorias

ON categorias.id_categoria = produto_categoria.id_categoria

";

if ($categoriaSelecionada != 'todos') {

    $sql .= " WHERE categorias.nome = :categoria";
}

$stmt = $pdo->prepare($sql);

if ($categoriaSelecionada != 'todos') {

    $stmt->bindValue(
        ':categoria',
        $categoriaSelecionada
    );
}

$stmt->execute();

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

                        <?php foreach ($categorias as $categoria) { ?>

                            <option

                                value="<?= $categoria['nome'] ?>"

                                <?= $categoriaSelecionada == $categoria['nome'] ? 'selected' : '' ?>>

                                <?= $categoria['nome'] ?>

                            </option>

                        <?php } ?>

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
                                <strong>Categoria:</strong>
                                <?= ucfirst($produto['categoria']) ?>
                            </p>

                            <p class="text-muted">
                                <strong>Descrição:</strong>
                                <?= $produto['descricao'] ?>
                            </p>


                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</section>