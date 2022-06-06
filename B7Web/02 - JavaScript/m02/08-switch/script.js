
let dia = 3;
let diaNome =  '';

switch (dia) {
    case 1:
        diaNome = 'Segunda-feira';
        break;
    case 2:
        diaNome = 'Terça-feira';
        break;
    case 3:
        diaNome = 'Quarta-feira';
        break;
    case 4:
        diaNome = 'Quinta-feira';
        break;
    case 5:
        diaNome = 'Sexta-feira';
        break;
    case 6:
        diaNome = 'Sábado';
        break;
    case 7:
        diaNome = 'Domingo';
        break;
    default:
        diaNome = 'Dia inválido';
}

document.getElementById('dia').innerHTML = "Hoje é "+diaNome;
