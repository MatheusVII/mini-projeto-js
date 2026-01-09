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
        <section class="requisicoes">
            <ul class="requisicoes-pendentes">
                <li>
                    <div class="info">
                        <div class="col1"><img src="../../../public/assets/img/perfil.png" alt=""></div>
                        <div class="col2">
                            <p>Matheus viana ferreira paz</p>
                            <p class="servico">UNHA EM GEL</p>
                        </div>
                        <div class="col3">
                            <p>14/02 as 22:00</p>
                        </div>
                    </div>
                    <div class="btns">
                        <button class="btn-aceitar">Aceitar</button>
                        <button class="btn-recusar">Recusar</button>
                        <p>Pendente</p>
                    </div>
                </li>
            </ul>
            
            <ul class="requisicoes-aceitas">

            </ul>
        </section>
    </main>
    <script type="module" src="../../../public/assets/js/main.js"></script>
</body>
</html>