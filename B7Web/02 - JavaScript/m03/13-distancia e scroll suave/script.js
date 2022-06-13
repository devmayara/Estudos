
// window.screenX; // Retorna a posição X da janela na tela
// window.screenY; // Retorna a posição Y da janela na tela

// document.querySelector('.texto').scrollTop // Retorna a posição Y do scroll da página

//document.querySelector('.texto').scrollTop(0, 0); // Retorna a posição Y do scroll da página

function subirTela() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}                               // Função para subir a página


