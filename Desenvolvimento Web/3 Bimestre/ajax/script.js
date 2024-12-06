function buscar (cep){

    let ajax = new XMLHttpRequest();

    ajax.open("GET", `https://viacep.com.br/ws/${cep}/json/`, true); //isso é a interpolação coloca `` e  a variavel ${variavel}

    ajax.onload = function (){

        if (ajax.status == 200) {

            loading.style.display = "none";
            
            console.log("Resposta: ", JSON.parse(ajax.responseText));

            let endereco = JSON.parse(ajax.responseText);

            let resultado = document.querySelector(".resultado");
            resultado.textContent = "Logradouro: " + endereco.logradouro + " | " + "Bairro: " + endereco.bairro;
        } 

        else {
            console.log("Erro: ", ajax.status, ajax.statusText);
        }
    }

    ajax.send(null);
}

let button = document.querySelector("button");

let loading =  document.querySelector(".carregando");

button.addEventListener("click", function(){

    loading.style.display = "block"; //para exibir o carregando...

    let input = document.querySelector("input");

    let cep = input.value;
    buscar(cep);
    
});