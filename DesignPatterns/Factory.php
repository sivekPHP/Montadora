<?php

namespace Ford\DesignPatterns;

use \Ford\Motor\Motor10;
use \Ford\Motor\Motor20;
use \Ford\Carro;
use \Ford\Sedan;

/**
 * Description of Factory
 *
 * @author aluno
 */
class Factory {
    
    private static $cor = "Azul";
    
    /**
     * Fabrica o carro Ka
     * $param string $cor
     * return objeto $carro
     */
    public static function MontarKa($cor) {
        $motor = new Motor10();
        $carro = new Carro($motor, $cor);
        
        return $carro;
    }
    /**
     * Fabrica o carro Fiesta
     * return objeto $carro
     */
    public static function MontarFiesta($cor) {
        $motor = new Motor20();
        $carro = new Sedan($motor, self::$cor, "sport");
        
        return $carro;
    }
}
