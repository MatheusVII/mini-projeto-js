function abrirModal(){
    overlay.classList.add("active");
    criarTarefa.classList.add("active");
}

function fecharModal(){
    criarTarefa.classList.remove("active");
    overlay.classList.remove("active");
    titulo.value = "";
    descricao.value = "";
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
            li.innerHTML = `   
                    <div class="info">          
                        <h4>${tarefa.titulo}</h4>
                        <p>${tarefa.descricao}</p>
                    </div>
                    <div class="btn-apagar">
                        <box-icon type='solid' name='trash' onclick="deletarTarefa(${tarefa.id})"></box-icon>
                    </div>
                    `
            lista.appendChild(li);
        });
    }
    else{
        lista.innerHTML = "";
        let h6 = document.createElement("h6");
        h6.textContent = "Nenhuma tarefa registrada";
        lista.appendChild(h6);
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
        ativarAlerta("Tarefa criada com sucesso!");
    })

;
}

function deletarTarefa(id){
    fetch(`http://localhost:3000/tarefas/${id}`,{
        method: "DELETE"
    })
    .then(res => res.json)
    .then(res => {
        buscarTarefas();
        ativarAlerta("Tarefa deletada com sucesso!");
    })
}

function ativarAlerta(texto){
    const alerta = document.querySelector(".alerta");
    alerta.classList.add("active");
    alertaTexto.textContent = texto;
}

function fecharAlerta(){
    const alerta = document.querySelector(".alerta");
    alerta.classList.remove("active");
}

function pesquisarTarefas(){    
    let lis = document.querySelectorAll("#lista li");
    if(busca.value.length > 0){
        lis.forEach(li => {
            if(!li.children[0].children[0].innerText.includes(busca.value)){
                li.classList.add("oculto");
            }
            else{
                li.classList.remove("oculto");
            }
        })
    }
    else{
        lis.forEach(li => {
            li.classList.remove("oculto");
        })
    }
}

buscarTarefas();