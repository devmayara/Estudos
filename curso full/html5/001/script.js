
document.querySelector("#botao").onclick = function() {
    var campo = document.querySelector("#campo").value
    
    var lista = document.querySelector("#lista")

    lista.innerHTML += "<li>"+campo+"</li>"
}