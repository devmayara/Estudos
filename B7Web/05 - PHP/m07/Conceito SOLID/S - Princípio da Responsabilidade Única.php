<?php

class Usuario {     // classe Deus: tudo junto.
    public function getId() {}
    public function setNome() {}

    public function add() {}
    public function update() {}
    public function delete() {}
}

class Usuarios {    // classe Filho: apenas o que ele precisa.
    public function getId() {}
    public function setNome() {}
}
class UsuarioDb {   // Junção feita com injeção de dependência.
    public function add(Usuarios $u) {}
    public function update(Usuarios $u) {}
    public function delete($id) {}
}
