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
        <section class="inicio-header">
            <div class="header1">
                <h1>REQUISIÇÕES PENDENTES</h1>
            </div>
            <div class="header2">
                <h1>REQUISIÇÕES ACEITAS</h1>
            </div>
        </section>
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
                        <div class="botoes">
                            <button class="btn-aceitar">Aceitar</button>
                            <button class="btn-recusar">Recusar</button>
                        </div>
                        <p>Pendente</p>
                    </div>
                </li>
            </ul>
            
            <ul class="requisicoes-aceitas">
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
                        <div class="botoes">
                            <button class="btn-finalizar">Finalizar</button>
                        </div>
                        <p>Aceito</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="requisicoes-finalizadas">
            <h1>REQUISIÇÕES FINALIZADAS</h1>
            <ul>
                <li>
                    <div class="info">
                        <div class="perfil"><img src="../../../public/assets/img/perfil.png" alt=""></div>
                        <div class="nome"><p>Rosengela da silva de souza ribeiro</p></div>
                        <div class="horario-aceito"><p>12/02 as 14:00</p></div>
                        <div class="horario-final"><p>12/02 as 16:00</p></div>
                        <div class="ganho"><p>R$30,00</p></div>
                    </div>
                    <div class="badge">
                        <p>Finalizado</p>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script type="module" src="../../../public/assets/js/main.js"></script>
</body>
</html>