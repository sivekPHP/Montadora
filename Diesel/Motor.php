<?php

namespace Diesel;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Motor
 *
 * @author aluno
 */
class Motor implements \Ford\Motor\interfaceMotor {
    
    private $aceleracao = 0;
    private $ligado = false;
    private $turbina = false;
    
    /**
     * 
     * @param bool $turbina
     */
    public function __construct($turbina) {
        $this->turbina = $turbina;
    }

    public function acelerar($valor) {
        $this->aceleracao = $valor;
    }

    public function desligar() {
        $this->ligado = false;
    }

    public function estaLigado() {
        return $this->ligado;
    }

    public function ligar() {
        $this->ligado = true;
    }

}
