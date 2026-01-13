function novaTarefa(){
    overlay.classList.add("active");
    criarTarefa.classList.add("active");
}

function fecharModal(){
    criarTarefa.classList.remove("active");
    overlay.classList.remove("active");
}