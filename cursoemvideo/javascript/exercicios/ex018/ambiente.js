let num = [5,8,6,0,7]
//num.push(3) // coloca o valor no ultimo
//num.length // ler o comprimento do vetor
//num.sort  // coloca o vetor em ordem crescente
/*
num.sort()
num.push(3)
console.log(num)
console.log(`O vetor tem ${num.length} posições`)
console.log(`O primeiro valor do vetor é ${num[0]}`)
*/

let valores = [8,1,7,4,2,9]
valores.sort()
//console.log(valores)
/*
console.log(valores[0])
console.log(valores[1])
console.log(valores[2])
console.log(valores[3])
console.log(valores[4])
console.log(valores[5])


for (let pos=0; pos < valores.length; pos++) {
  console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}
*/

for (let pos in valores) {
  console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}