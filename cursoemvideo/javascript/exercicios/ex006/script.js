var a = document.getElementById('area')
a.addEventListener('click', clicar)
a.addEventListener('mouseenter', entrar)
a.addEventListener('mouseout', sair)

function clicar(){
  a.innerText = 'Clicou!'
  a.style.backgroundColor = 'red'
}
function entrar(){
  a.innerText = 'Entrou!'
}
function sair(){
  a.innerText = 'Saiu!'
  a.style.backgroundColor = '#3b7e68'
}