<?php

// definindo a classe   /// criando
class Post {    // public, private, protected
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLikes() {
        $this->likes++;
    }
}

// definindo o objeto e adicionando propriedades      /// executando
$post1 = new Post();
$post1->aumentarLikes();
$post1->aumentarLikes();

$post2 = new Post();
$post2->aumentarLikes();

echo "Post 1 tem " . $post1->likes . " likes <br>";
echo "<hr>Post 2 tem " . $post2->likes . " likes <br>";


/**
* Definindo Métodos e Propriedades
*/

// sao as carecteristicas que um objeto possui
