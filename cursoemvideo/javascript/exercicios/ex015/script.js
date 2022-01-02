function verificar() {
  var data = new Date()
  var ano = data.getFullYear()
  var fano = document.getElementById('textano')   //TANTO FAZ 
  var res = document.querySelector('div#res')     // FORMA DE CIMA OU DE BAIXO
  if (fano.value.length == 0 || Number(fano.value) > ano) {
    alert('[ERRO] Verifique os dados e tente novamente!')
  } else {
    var fsex = document.getElementsByName('radsex')
    var idade = ano - Number(fano.value)
    //res.innerHTML = `Idade calculada: ${idade}`   // TESTE
    var gênero = ''
    var img = document.createElement('img')
    img.setAttribute('id', 'foto')
    if (fsex[0].checked) {
      gênero = 'Homem'
      if (idade >= 0 && idade < 10) {
        //  CRIANÇA
        img.setAttribute('src', 'img/foto-criança-m.png')
      } else if (idade < 21) {
        //  ADOLECENTE
        img.setAttribute('src', 'img/foto-adolecente-m.png')
      } else if (idade < 50) {
        // ADULTO
        img.setAttribute('src', 'img/foto-adulto-m.png')
      } else {
        // IDOSO
        img.setAttribute('src', 'img/foto-idoso-m.png')
      }
    } else if (fsex[1].checked) {
      gênero = 'Mulher'
      if (idade >= 0 && idade < 10) {
        //  CRIANÇA
        img.setAttribute('src', 'img/foto-criança-f.png')
      } else if (idade < 21) {
        //  ADOLECENTE
        img.setAttribute('src', 'img/foto-adolecente-f.png')
      } else if (idade < 50) {
        //  ADULTO
        img.setAttribute('src', 'img/foto-adulto-f.png')
      } else {
        //  IDOSO
        img.setAttribute('src', 'img/foto-idoso-f.png')
      }
    }
    res.style.textAlign = 'center'
    res.style.color = 'green'
    res.innerHTML = `Detectamos ${gênero} com ${idade} anos.`
    res.appendChild(img)
  }
}