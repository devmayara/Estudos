var n1 = Number(window.prompt('Digite um número: ')) // String
var n2 = Number(window.prompt('Digite outro número: ')) // String
var s = n1 + n2
window.alert(`A soma entre ${n1} e ${n2} é igual a ${s}`) // + é Concatenação

// (number +  number) para adição
// (string + string) para concatenação

// para numero inteiro é Number.parseINt()
// para numero real é Number.parseFloat()
// para qualquer numero é Number()

// para dar o resultado como string:
// String(s) --- preferencia
//s.toString()

//var s = 'JavaScript'
//'Eu estou aprendendo s'   --- não faz interpolação
//'Eu estou aprendendo' + s --- usa concatenação
//`Eu estou aprendendo ${s}`--- usa template string