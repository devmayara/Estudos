<?php

// definindo a classe   /// criando
class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct($qtLikes = 0) {
        $this->likes = $qtLikes;
    }

    public function aumentarLikes() {
        echo 'abc';
        $this->likes++;
    }
}

// definindo o objeto e adicionando propriedades      /// executando
$post1 = new Post(10);
$post1->author = 'João';

$post2 = new Post();  

echo "Post 1 do ". $post1->author." tem " . $post1->likes . " likes <br>";
echo "<hr>Post 2 tem " . $post2->likes . " likes <br>";
