<?php
    include '../includes/barra-lateral.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <section class="tarefas">
        <div class="menu">
            <div class="search">
                <input type="search" name="pesquisa" id="pesquisa">
                <button type="button" class="btn-pesquisa">8====D</button>
            </div>
            <div class="btn-novo">
                <button type="button" onclick="modalNovo()">Novo</button>
            </div>
        </div>
        <div class="content">
            <div class="tarefas-usuario">
                <ul class="lista-tarefas">
                    <li>
                        <div class="info">
                            <p id="tarefa">Tarefa</p>
                            <p id="data-tarefa">23/04/2025</p>
                        </div>
                        <div class="btn">
                            <button type="button" class="btn-excluir">x</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="modal-novo">
        <div class="corpo">
            <div class="form">
                <div class="input">
                    <label for="tarefa">Conteudo da tarefa</label>
                    <input type="text" name="tarefa" id="tarefa" class="input-tarefa" placeholder="Tarefa">
                </div>
                <div class="btn">
                    <button type="button" class="btn-novo">Criar</button>
                </div>
            </div>
        </div>
    </section>
    <script src="../../../public/assets/js/index.js"></script>
</body>
</html>