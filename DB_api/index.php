<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Api - Testes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <div class="cartao">
        <div class="pesquisa">
            <h1 class="text-center" id="titulo">Dragon Ball API Consulter</h1>
            <div class="input-pesquisa d-flex">
                <input type="search" name="pesquisa" id="pesquisa" class="form-control" placeholder="Digite sua pesquisa">
                <button type="button" class="btn btn-primary ms-2" onclick="pesquisar()">Pesquisar</button>
            </div>
        </div>
        <div class="carta">
            <div class="top row w-100 fs-2">
                <div class="nome col"></div>
                <div class="raca col text-end"></div>
            </div>
            <div class="imagem">
                <img src="" alt="" id="img">
            </div>
            <div class="informacoes row w-100">
                <div class="afiliacao col"></div>
                <div class="genero col text-end"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>