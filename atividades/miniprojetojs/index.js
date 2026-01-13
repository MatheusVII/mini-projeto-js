function abrirModal(){
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
        lista.innerHTML = "";
        listaTarefas.forEach(tarefa => {
            let li = document.createElement("li");
            li.dataset.id = tarefa.id;
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
    else{
        let h6 = document.createElement("h6");
        h6.textContent = "Nenhuma tarefa registrada";
        tarefas.appendChild(h6);
    }
}

function novaTarefa(){
    event.preventDefault();

    let tarefa = {
        titulo: titulo.value,
        descricao: descricao.value
    }
    fetch("http://localhost:3000/tarefas", {
        method: "POST",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(tarefa)
    })
    .then(res => res.json())
    .then(res => {
        buscarTarefas()
        fecharModal()
    })

;
}

buscarTarefas();