function carregar() {
  var msg = document.getElementById('msg')
  var img = document.getElementById('imagem')
  var data = new Date()
  var hora = data.getHours()
  //var hora = 8          // TESTE DE HORA //
  msg.innerHTML = `Agora são ${hora} horas`
  if (hora >= 0 && hora < 12) {
        //BOM DIA!
    img.src = 'img/manha.png'
    document.body.style.background = '#FCE684'
  } else if (hora >= 12 && hora <18) {
        //BOA TARDE!
    img.src = 'img/tarde.png'
    document.body.style.background = '#B6D4E9'
  } else {
        //BOA NOITE!
    img.src = 'img/noite.png'
    document.body.style.background = '#132A35'
  }
}
