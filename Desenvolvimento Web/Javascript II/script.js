const input = document.querySelector('input')
const botao = document.querySelector('button')
const lista = document.querySelector('ul')

botao.addEventListener('click', function(){

    let tarefa = input.value

    if (tarefa != "") {
    
        addToList(tarefa)
        salvarNoLocalStorage(tarefa)
    }

    input.value = ''
})

function addToList (tarefa){
    
    let novaTarefa = document.createElement('li')
    novaTarefa.textContent = tarefa

    //Botão de excluir
    let excluir = document.createElement('button')
    excluir.textContent = 'excluir'

    excluir.addEventListener('click', function (){

        novaTarefa.remove()
    })

    novaTarefa.appendChild(excluir)

    lista.appendChild(novaTarefa)
}

function salvarNoLocalStorage(tarefa){

    const tarefas = obterTodasAsTarefas();

    tarefas.push(tarefa)

    localStorage.setItem('tarefas', JSON.stringify(tarefas))

}

function obterTodasAsTarefas(){

    const tarefas = localStorage.getItem('tarefas')

   return tarefas ? JSON.parse(tarefas) : []

}
