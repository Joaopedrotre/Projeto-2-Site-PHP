<?php

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $empresa = $_POST['empresa'] ?? '';

    $comprador = $_POST['comprador'] ?? '';

    $cidade = $_POST['cidade'] ?? '';

    $estado = $_POST['estado'] ?? '';

    $email = $_POST['email'] ?? '';

    $telefone = $_POST['telefone'] ?? '';

    $mensagem = urlencode(

        "Olá! Gostaria de solicitar um atendimento comercial.\n\n"

            . "Empresa: $empresa\n"

            . "Comprador: $comprador\n"

            . "Cidade: $cidade\n"

            . "Estado: $estado\n"

            . "E-mail: $email\n"

            . "Telefone: $telefone"

    );
}

?>

<section class="contato py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow-sm p-4">

                    <h1 class="text-center mb-3">

                        Entre em contato

                    </h1>

                    <p class="text-center mb-5">

                        Preencha os dados abaixo e envie uma mensagem diretamente para nosso representante comercial.

                    </p>

                    <form method="POST">

                        <div class="mb-3">

                            <label class="form-label">

                                Nome da empresa

                            </label>

                            <input
                                type="text"
                                name="empresa"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">

                                Nome do comprador

                            </label>

                            <input
                                type="text"
                                name="comprador"
                                class="form-control"
                                required>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Cidade

                                </label>

                                <input
                                    type="text"
                                    name="cidade"
                                    class="form-control"
                                    required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Estado

                                </label>

                                <select name="estado" class="form-select">

                                    <option value="PR">PR</option>

                                    <option value="SC">SC</option>

                                    <option value="SP">RS</option>

                                </select>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">

                                E-mail

                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Telefone

                            </label>

                            <input
                                type="tel"
                                name="telefone"
                                class="form-control"
                                required>

                        </div>

                        <div class="text-center">

                            <button
                                class="btn btn-warning px-4"
                                type="submit">

                                Gerar mensagem

                            </button>

                        </div>

                    </form>

                    <?php if ($mensagem): ?>

                        <div class="text-center mt-5">

                            <a

                                href="https://wa.me/5544991580220?text=<?= $mensagem ?>"

                                target="_blank"

                                class="btn btn-success btn-lg">

                                <i class="bi bi-whatsapp"></i>

                                Enviar para o WhatsApp

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</section>