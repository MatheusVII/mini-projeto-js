function novaTarefa(){
    overlay.classList.add("active");
    criarTarefa.classList.add("active");
}

function fecharModal(){
    criarTarefa.classList.remove("active");
    overlay.classList.remove("active");
}

function buscarTarefas(){
    fetch("http://localhost:3000/tarefas")
    .then(res => res.json())
    .then(data => {
        inserirTarefas(data);
    })
}   

function inserirTarefas(listaTarefas){
    if(listaTarefas.length > 0){
        listaTarefas.forEach(tarefa => {
            let li = document.createElement("li");
            li.innerHTML = `   
                    <div class="info">          
                        <h4>${tarefa.titulo}</h4>
                        <p>${tarefa.descricao}</p>
                    </div>
                    <div class="btn-apagar">
                        <box-icon type='solid' name='trash'></box-icon>
                    </div>
                    `
            lista.appendChild(li);
        });
    }
}

buscarTarefas();