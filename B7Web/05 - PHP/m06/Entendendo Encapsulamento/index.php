<?php

class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function aumentarLikes() {
        $this->likes++;
    }

    public function setAuthor($n) {
        if(strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
    }

    public function getAuthor() {
        return $this->author ?? 'Anônimo';
    }
}

$post1 = new Post();
$post1->setAuthor('pi');

$post2 = new Post();
$post2->setAuthor('mayara');

echo "<hr>Post 1 tem " . $post1->likes . " likes - ".$post1->getAuthor()."<br>";
echo "<hr>Post 2 tem " . $post2->likes . " likes - ".$post2->getAuthor()."<br>";
