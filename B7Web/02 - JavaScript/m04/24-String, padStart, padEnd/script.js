
// let telefone = '9';

// console.log(telefone.padEnd(9, '*'));

// padEnd é usado para preencher o final da string com um caracter especifico
// padStart é usado para preencher o inicio da string com um caracter especifico



let cartao =  '1234123412344321';

let lastDigit = cartao.slice(-4);

let cartaoMascarado = lastDigit.padStart(16, '*');

console.log(`Confirmação do cartão: ${cartaoMascarado}`);
