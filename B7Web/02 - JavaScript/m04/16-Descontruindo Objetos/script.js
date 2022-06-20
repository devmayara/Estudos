
let pessoa = {
    nome: 'Mayara',
    sobrenome: 'Silva',
    idade: 26,
    social:{
        facebook: 'mayara silva',
        instagram: '@mayara.silva'
    },
    nomeCompleto: function(){
        return `${this.nome} ${this.sobrenome}`;
    }
};

// ES5
// let nome = pessoa.nome;
// let sobrenome = pessoa.sobrenome;
// let idade = pessoa.idade;

//ES6
// let {nome, sobrenome, idade} = pessoa;

// console.log(nome, sobrenome, idade);

// let {facebook, instagram} = pessoa.social;

let {nome, idade, social: {instagram}} = pessoa;

console.log(nome, idade, instagram);
