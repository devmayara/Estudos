// Array é uma listagem numerada
// Object é uma listagem nomearada

// let carros = [  // Array
//     'Palio', 
//     'Uno', 
//     'Fiesta', 
//     'Gol'
// ];

//console.log(carros[0]);

// let carro = {   // Object
//     marca: 'Fiat',
//     modelo: 'Palio',
//     ano: '2020',
//     cor: 'Preto',
//     preco: 'R$ 12.000,00',
//     portas: 4,
//     motor: '1.0',
//     combustivel: 'Flex',
//     ligado: false,
//     ligar: function () {
//         this.ligado = true;
//         console.log('VRUM... VRUM...');
//     },
//     acelerar: function () {
//         if(this.ligado == true) {   // Se ligado
//             console.log('Riiiihihiii...');
//         } else {
//             console.log('Ligue o carro!');
//         }
//     }
// };

// console.log("Modelo: " + carro.modelo);

// carro.ligar();
// carro.acelerar();




let carros1 = [
    {marca: 'Fiat', modelo: 'Palio'},
    {marca: 'Fiat', modelo: 'Uno'},
    {marca: 'Chevolet', modelo: 'Fiesta'},
    {marca: 'Voswak', modelo: 'Gol'}
];

console.log(carros1[0].modelo);
