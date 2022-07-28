<?php

class Post {
    protected int $id;
    private int $likes = 0;

    public function setId($i) {
        $this->id = $i;
    }
    public function getId() {
        return $this->id;
    }

    public function setLikes($l) {
        $this->likes = $l;
    }
    public function getLikes() {
        return $this->likes;
    }
}

// extends é uma herança da classe Post

class Foto extends Post {
    private $url;
// com protected e private, acesso é restrito a classe e suas filhas
    public function  __construct($id) {
        $this->id = 900;
    }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }
}

$foto = new Foto(3);
$foto->setLikes(10);
$foto->setUrl('https://www.abc.com');

echo "FOTO: #" . $foto->getId() . " - " . $foto->getLikes() . " likes - " . $foto->getUrl();

// Qual a diferença entre a propriedade private da protected?

//Propriedade private torna a propriedade exclusiva para aquela classe, diferente da protected que outra classe pode herdar essa propriedade.

// A diferença é que a private não é visível fora da classe, e a protected é visível fora da classe e suas filhas.
