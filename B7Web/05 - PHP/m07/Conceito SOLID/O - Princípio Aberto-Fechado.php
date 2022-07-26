<?php

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt implements Remuneravel {
    public function remuneracao() {}
}
class Estagio implements Remuneravel {
    public function remuneracao() {}
}
class ContratoPj implements Remuneravel {
    public function remuneracao() {}
}

class FolhaDePagamento {
    public function calcular(Remuneravel $funcionario) {
        return $funcionario->remuneracao();
    }
}
