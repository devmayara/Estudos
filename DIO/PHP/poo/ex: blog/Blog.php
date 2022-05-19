<?php 

declare(strict_types=1);

class Blog
{
    /**
     * @var PDO
     */
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:
            host=localhost;
            dbname=blog', 
            'root', 
            '');
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list(): array
    {
        $sql = 'SELECT * FROM post';
        
        $post = [];
        
        foreach ($this->conexao->query($sql) as $value) {
            array_push($post, $value);
        }

        return $post;
    }

    public function insert(string $titulo, string $descricao): int
    {
        $sql = 'INSERT INTO post(titulo, descricao) VALUES(?, ?)';
        
        $prepare = $this->conexao->prepare($sql);
        
        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $descricao);
        $prepare->execute();
        
        return $prepare->rowCount();
    }

    public function update(string $descricao, int $id): int
    {
        $sql = 'UPDATE post SET descricao = ? WHERE id = ?';
        
        $prepare = $this->conexao->prepare($sql);
        
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        
        $prepare->execute();
        
        return $prepare->rowCount();
    }

    public function delete(int $id): int
    {
        $sql = 'DELETE FROM post WHERE id = ?';
        
        $prepare = $this->conexao->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->execute();
        
        return $prepare->rowCount();
    }
}
