<?php

namespace Ford\Motor;

/**
 *
 * @author aluno
 */
interface interfaceMotor {
    public function acelerar($valor);
    
    public function ligar();
    
    public function desligar();
    
    public function estaLigado();
}
