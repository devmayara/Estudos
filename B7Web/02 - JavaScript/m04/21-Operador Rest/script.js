
// function adicionar(numeros) {
//     console.log(numeros);
// }
// adicionar(5);

// rest com spread


function adicionar(nomes, ...novosNomes) {
    let novoConjunto = [
        ...nomes,
        ...novosNomes
    ];
    return novoConjunto;
}

let nomes = ["Mayara", "Maria"];
let outros = adicionar(nomes, "João", "Pedro");

console.log(outros);
