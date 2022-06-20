
let timer;

// function comecar() {
//     timer = setInterval(showTime, 1000);
// }

// function parar() {
//     clearInterval(timer);
// }

// function showTime() {
//     let d = new Date();
//     let h = d.getHours();
//     let m = d.getMinutes();
//     let s = d.getSeconds();
//     let txt = `São exatamente: ${h}h:${m}m:${s}s`;

//     document.querySelector('.demo').innerHTML = txt;
// }

function comecar() {
    timer = setTimeout(function() {
        document.querySelector('.demo').innerHTML = 'Rodou!';
    }, 2000);
}

function parar() {
    clearTimeout(timer);
}
