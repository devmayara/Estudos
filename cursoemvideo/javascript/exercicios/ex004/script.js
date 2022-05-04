var nome = window.prompt("Qual é seu nome?");
document.write(`Olá, <strong>${nome}!</strong> Seu nome tem ${nome.length} letras.<br/>`);
document.write(`Seu nome em letras maiúsculas é ${nome.toUpperCase()}. <br/>`);
document.write(`Seu nome em letras minúsculas é ${nome.toLowerCase()}.`)

//var nome =
// nome.length        --- quantos caracteres a string tem
// nome.toUpperCase() --- tudo para 'MAIÚSCULAS'
// nome.toLowerCase() --- tudo para 'minúsculas'



/*  NODE:
*> n1 = 1545.5
*1545.5
*> n1
*1545.5
*> n1.toFixed(2)
*'1545.50'
*> n1.toFixed(2).replace('.',',')
*'1545,50'
*> n1.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'})
*'R$ 1.545,50'
*> n1.toLocaleString('pt-BR', {style: 'currency', currency: 'USD'})
*'US$ 1.545,50'
*> n1.toLocaleString('pt-BR', {style: 'currency', currency: 'EUR'})
*'€ 1.545,50'
*> 
*      // ORDEM DE PRECEDÊNCIA:
//  ()
//  **
//  * / %
//  + -

// Ex: 
/*> var a = 5 + 3
undefined
> a
8
> var b = a % 5
undefined
> b
3
> var c = 5 * b ** 2
undefined
> c
45
> var d = 10 - a / 2
undefined
> d
6
> var e = 6 * 2 / d
undefined
> e
2
> var f = b % e + 4 / e
undefined
> f
3
> */

// AUTO - ATRIBUIÇÃO:
/*> var n = 3
  undefined
  > n = n + 4
  7
  > n
  7
  > n = n - 5
  2
  > n = n * 4
  8
  > n = n / 2
  4
  > n = n ** 2
  16
  > n = n % 5
  1
  > */


//INCREMENTO:
/*> var x = 10
  undefined
  > x
  10
  > x++
  10
  > x
  11
  > x--
  11
  > x
  10
  > 
  

  // RELACIONAIS:

  > 5 > 2
    true
    > 7 < 4
    false
    > 8 >= 8
    true
    > 9 <=7
    false
    > 5 == 5
    true
    > 4 != 4
    false
    > 
  
  // LÓGICOS

  ! é negação
  && é conjunção nosso eh
  || é disjunção nosso ou
  
  idade >= 15 && idade <=17       // a idade está entre 15 e 17?
  estado == 'RJ' || estado == 'SP' //o estado é RJ ou SP?
  salário > 1500 && sexo !='M'     //o salário é acima de 1500 e não é homem?
  
  //
  > var media = 5.5
    undefined
    > media >7
    false
    > media > 7?'APROVADO':'REPROVADO'
    'REPROVADO'
    > meida += 3
    Uncaught ReferenceError: meida is not defined
    > media += 4
    9.5
    > media >7?'APROVADO':'REPROVADO'
    'APROVADO'
    >   
  */