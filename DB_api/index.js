async function pegarDados(pesquisa) {
    try {
        const res = await fetch(`https://dragonball-api.com/api/characters?name=${pesquisa}`);
        const json = await res.json(); 
        return json;
    } catch (err) {
        console.log(err);
    }
}

async function pesquisar() {
    const input = document.querySelector("#pesquisa");
    const pesquisa = input.value;
    const nome = document.querySelector(".nome");
    const raca = document.querySelector(".raca");
    const imagem = document.querySelector("#img");
    const afiliacao = document.querySelector(".afiliacao");
    const genero = document.querySelector(".genero");
    const carta = document.querySelector(".carta");

    const resultado = await pegarDados(pesquisa);
    if(resultado.length != 0){
        var personagem = resultado[0];

        nome.textContent = personagem.name;
        raca.textContent = personagem.race;
        imagem.src = personagem.image;
        afiliacao.textContent = personagem.affiliation;
        genero.textContent = personagem.gender;

        carta.style.display = "grid";
    }
    else{
        nome.innerHTML = "<p class='text-danger'>Personagem nao encontrado</p>";       
        carta.style.display = "grid";
    }
}
