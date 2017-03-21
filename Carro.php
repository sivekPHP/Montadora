<?php

namespace Ford;

class Carro {

    const MARCA = "VW";
    const MODELO = "Golf";

    public $cor = "Azul";
    
    private $motor = 1.4;
    private $combustivel = 0;
    private $ligado = false;
    protected $versao;
    private $opcionais = array('ar', 'rodas', 'abs');

    /**
     * 
     * @param Motor $motor
     * @param string $cor
     * @param string $versao
     */
    public function __construct(Motor\interfaceMotor $motor, $cor = "Preto", $versao) {
        $this->cor = $cor;
        $this->versao = $versao;
        $this->motor = $motor;
    }
    
    public function __get($name) {
        return $this->$name;
        echo "Você tentou acessar o atributo $name \n";
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
        echo "Você tentou gravar na variável $name o valor $value \n";
    }
    
    public function __call($name, $arguments) {
        echo "Você tentou chamar a função $name \n";
    }

    public function ligar() {
        if ($this->combustivel > 0) {
            echo "Carro ligado!\n";
            $this->motor->ligar();
        } else {
            throw new IEException("Sem XXX combustível!\n");
            echo "Sem combustível!\n";
            $this->motor->desligar();
        }
    }

    public function desligar() {
        if ($this->motor->estaLigado() == true) {
            $this->motor->desligar();
        } else {
            echo "Carro já está desligado!\n";
        }
    }

    public function acelerar($quantidade) {
        $this->motor->acelerar($quantidade);
    }

    public function freiar() {
        
    }

    public function abastecer($quantidade) {
        //$conbustivel = 16;
        //$this->combustivel = $this->combustivel + $quantidade;
        if ($quantidade <=0) {
            throw new \InvalidArgumentException("A quantidade deve ser positiva!\n");
        }
        $this->combustivel += $quantidade;
    }

}
