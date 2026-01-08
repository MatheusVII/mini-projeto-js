<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../../public/assets/css/main.css">
</head>
<body>
    <?php
        include_once '../includes/header.php';
    ?>
    <main>
        <article class="__index-start-img">
            <img src="../../../public/assets/img/wide-teste.jfif" alt="">
        </article>

        <section class="__index-orders">
            <article class="__index-search">
                <h1>Solicitações</h1>
                <div class="__index-barra-pesquisa">
                    <input type="search" name="pesquisa" id="pesquisa" placeholder="Pesquisar...">
                </div>
            </article>

            <article class="__index-order-list">
                <div class="__index-thead">
                    <p>Cliente</p>
                    <p>Email</p>
                    <p>Telefone</p>
                    <p>Data</p>
                    <p>Status</p>
                </div>
                <div class="__index-tbody">
                    <ul>
                        <li>
                            <p>Samira</p>
                            <p>samira@gmail.com</p>
                            <p>85 00909003490</p>
                            <p>12/04/2025 as 14:00</p>
                            <p>Pendente</p>
                        </li>
                        <li>
                            <p>Samira</p>
                            <p>samira@gmail.com</p>
                            <p>85 00909003490</p>
                            <p>12/04/2025 as 14:00</p>
                            <p>Pendente</p>
                        </li>
                        <li>
                            <p>Samira</p>
                            <p>samira@gmail.com</p>
                            <p>85 00909003490</p>
                            <p>12/04/2025 as 14:00</p>
                            <p>Pendente</p>
                        </li>
                        <li>
                            <p>Samira</p>
                            <p>samira@gmail.com</p>
                            <p>85 00909003490</p>
                            <p>12/04/2025 as 14:00</p>
                            <p>Pendente</p>
                        </li>
                    </ul>
                </div>
            </article>
        </section>
    </main>
    <script type="module" src="../../../public/assets/js/main.js"></script>
</body>
</html>