<?php

namespace Ford\Motor;

/**
 * Classe genérica de motor
 * @author Josemar Sivek
 * @link URL description
 */
abstract class Motor implements interfaceMotor, \Countable {
    const POTENCIA = 1.0;
    const TIPOCOMBUSTIVEL = "FLEX";
    
    private $aceleracao = 0;
    private $ligado = false;
    
    /**
     * Acelera o motor
     * @param int $valor
     */
    public function acelerar($valor) {
        $this->aceleracao = $valor;
    }
    
    /**
     * Liga o motor
     */
    public function ligar() {
        $this->ligado = true;
    }
    
    /**
     * Desliga o motor
     */
    public function desligar() {
        $this->ligado = false;
    }
    
    /**
     * Informa o estado do motor
     * @return bool
     */
    public function estaLigado() {
        return $this->ligado;
    }
    
    /**
     * Retorna a potência do motor
     * @return float
     */
    public function getPotencia() {
        return self::POTENCIA;
    }
    
    /**
     * 
     */
    public function count() {
        return $this->aceleracao;
    }

}
