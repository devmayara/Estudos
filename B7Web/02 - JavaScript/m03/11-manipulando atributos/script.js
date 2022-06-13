
function trocarImagem(filename, especiename) {
    document.querySelector(".imagem").setAttribute('src', 'images/' + filename);
    document.querySelector(".imagem").setAttribute('data-animal', especiename);
}

function pegarEspecie() {
    let especie = document.querySelector(".imagem").getAttribute('data-animal');
    alert("Ele é da especie: "+especie);
}
