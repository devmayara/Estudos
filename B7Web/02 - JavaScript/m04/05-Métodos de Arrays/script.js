
let list = [45, 4, 9, 16, 25];

//let result = list.toString(); // converte o array para string

//let result = list.join(' - ');      // converte o array para string, separando os itens por um delimitador

//let result = list.indexOf('banana'); // retorna o índice do item na lista

//list.shift(); // remove o primeiro item da lista
//list.pop(); // remove o último item da lista

//list.push('uva'); // adiciona um item ao final da lista

//list.unshift('uva'); // adiciona um item no início da lista

//list[0] = 'Ovos'; // substitui o primeiro item da lista

//list.splice(1, 1);  // remove um item da lista

//list.sort(); // ordena a lista
//list.reverse(); // inverte a ordem da lista

let list2 = [];

// list2 = list.map(function(item) {
//     return item * 2;
// });          // retorna um novo array com os itens do array original multiplicados por 2

// for(let i in list) {
//     list2.push(list[i] * 2);
// }

list2 = list.filter(function(item) {
    return (item < 20)? true : false;
}); // retorna um novo array com os itens do array original que são menores que 20  // every: retorna true se todos os itens da lista forem verdadeiros

let result = list2;

console.log(result);
