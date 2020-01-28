<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
            
        }elseif ($t=="CP") {
            $this->setSaldo(150);
        }
        echo "<p>Conta aberta com sucesso!</p>";
    }
    
    public function fecharConta(){
        if($this->getStatus()==true){
            if($this->getSaldo()==0){
                $this->setStatus(false);
                echo "<table><tr><td><p>Conta fechada com sucesso!</p></td><td><p>Dono: ".$this->getDono()."</p></td></tr></table><br>";
            }elseif ($this->getSaldo()>0) {
                echo "<p>A conta ainda tem dinheiro, não posso fechá-la!</p>";
            }elseif ($this->getSaldo()<0) {
                echo "<p>A conta está em débito, não posso fechá-la!</p>";
            }
            
        }else{
            echo "<p>A conta já está fechada!</p>";
        }
    }
    
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
            echo "<table><tr><td><p>Deposito de R$$v efetuado com sucesso!</p></td><td><p>Dono: ".$this->getDono()."</p></td><td><p>Saldo: R$".$this->getSaldo()."</p></td></tr></table><br>";
        }else{
            echo"<p>Conta está fechada, não posso depositar!</p>";
        }
    }
    
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo()>=$v){
               $this->setSaldo($this->getSaldo()-$v);
               echo "<table><tr><td><p>Saque de R$$v efetuado com sucesso!</p></td><td><p>Dono: ".$this->getDono()."</p></td><td><p>Saldo: R$".$this->getSaldo()."</p></td></tr></table><br>";
            }else{
                echo "<p>Saldo insuficiente para saque.</p>";
            }
            
        }else{
            echo"<p>Conta está fechada, não posso sacar!</p>";
        }
    }
    
    public function pagarMensal(){
        if($this->getTipo()=="CC"){
            $v=12;
        }elseif ($this->getTipo()=="CP") {
            $v=20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()-$v);
            echo "<table><tr><td><p>Mensalidade de R$$v paga com sucesso!</p></td><td><p>Dono: ".$this->getDono()."</p></td><td><p>Saldo: R$".$this->getSaldo()."</p></td></tr></table><br>";
        }else{
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }
    
    function __construct() {
        
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso!</p>";
    }

    
    
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
}
