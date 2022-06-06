
// let carro1 = 'Palio';
// let carro2 = 'Uno';
// let carro3 = 'Fiesta';
// let carro4 = 'Gol';

let carros = ['Palio', 'Uno', 'Fiesta', 'Gol'];

// console.log(carros[0]);

let carros1 = new Array('Palio', 'Uno', 'Fiesta', 'Gol');

let carros2 = [
    'Palio',
    'Uno',
    'Fiesta',
    'Gol',
    function () {
        console.log('Testando 0,1,2,3...');
    }
]

carros2[4]();   // Executa a função




let ingredientes = [
    ['uva', 'banana', 'maçã'],
    ['farinha', 'ovo', 'leite'],   // Array de arrays
]

console.log(ingredientes[0][1]);    // Banana
