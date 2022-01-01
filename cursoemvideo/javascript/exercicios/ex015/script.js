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
    if (fsex[0].checked) {
      gênero = 'Homem'
    } else if (fsex[1].checked) {
       gênero = 'Mulher'
    }
    res.innerHTML = `Detectamos ${gênero} com ${idade} anos.`
  }
}