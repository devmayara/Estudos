
function pegarTemperatura() {
    return new Promise(function (resolve, reject) {
        console.log("pegando temperatura...");

        setTimeout(function () {
            resolve('40 na sombra');
        }, 2000);
    });
};

// USANDO A PROMISE com Sicrono:
console.log("Código antes!");

let temp = pegarTemperatura();

console.log("Código durante!");

temp    // Callback que será executado quando a promise for resolvida
    .then(function(resultado) {
        console.log("TEMPERATURA: "+resultado);
    })  // quando a promise for resolvida
    .catch(function(erro) {
        console.log("EITA, deu error!: "+erro);
    }); // quando a promise for rejeitada

console.log("Código depois!");

// PROMISE funcionam em operações assicronas;
