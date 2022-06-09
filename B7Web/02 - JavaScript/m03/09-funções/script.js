
// function alterar() {
//     document.getElementById('titulo').innerHTML = "Trocou o titulo";
//     document.getElementById('campo').value = "Trocou o campo";
// }

// alterar(); 



function alterar(titulo) {
    document.getElementById('titulo').innerHTML = titulo;
    document.getElementById('campo').value = titulo;
}

alterar('titulo alterado')
