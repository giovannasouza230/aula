<?php

Class Funcionario {

    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $funcao;
    public $salario;
    public $turno;
    public $email;
    public $turno;

    public function mostraDados(){

    }

    public function calculaDesconto($desconto){
    $this->salario = $this->salario - $desconto;
}

public function mostraSalario(){
    echo
}
public function mostra($valor){
    echo "<hr><br>".$valor."<br><hr>";
}

}