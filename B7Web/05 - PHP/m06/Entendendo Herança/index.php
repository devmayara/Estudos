<?php

class Post {
    private int $id;
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

    public function  __construct($id) {
        $this->setId($id);
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
