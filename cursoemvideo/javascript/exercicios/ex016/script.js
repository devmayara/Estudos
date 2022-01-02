function contar() {
  let inicio = document.getElementById('txti')
  let fim = document.getElementById('txtf')
  let passos = document.getElementById('txtp')
  let res = document.getElementById('res')

  if (inicio.value.length == 0 || fim.value.length == 0 || passos.value.length == 0) {
    //alert('[ERRO] Faltam dados!')
    res.innerHTML = 'Impossível contar!'
  } else {
    //alert('TUDO OK!')       //  TESTE
    res.innerHTML = 'Contando: <br>'
    let i = Number(inicio.value)
    let f = Number(fim.value)
    let p = Number(passos.value)
    if (p <= 0) {
      alert('Passo Inválido! Considerando PASSO 1')
      p = 1
    }

    if (i < f){
      // contagem crescente
      for(let c = i; c <= f; c += p) {
        res.innerHTML += `${c} \u{1F449} `
      }
    } else {
      // contagem regressiva
      for(let c = i; c >= f; c -= p) {
        res.innerHTML += `${c} \u{1F449} `
      }
    }
    res.innerHTML += ` \u{1F3F4} `
  }
}