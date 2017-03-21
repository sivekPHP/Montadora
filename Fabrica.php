<pre>
<?php
require("Motor/interfaceMotor.php");
require("Motor/Motor.php");
require("Motor/Motor10.php");
require("Motor/Motor20.php");
//require("Motor/Motor20Turbo.php");
//require("MotorNitro.php");
require("Diesel/Motor.php");
require("IEException.php");

require("Carro.php");
require("Sedan.php");

require("DesignPatterns/Factory.php");

use Ford\Motor\Motor10;
use Ford\Motor\Motor20;
use Diesel\Motor as MotorDiesel;
use Ford\Carro;

$novo = \Ford\DesignPatterns\Factory::MontarFiesta("Azul");
$novo->acelerar(10);

var_dump($novo);

/*
$motorDiesel = new MotorDiesel(true);
var_dump($motorDiesel);

$motor10 = new Motor10();
echo $motor10->getPotencia()."\n";
var_dump($motor10);

$motor20 = new Motor20();
echo $motor20->getPotencia()."\n";
var_dump($motor20);

$carro1 = new Carro($motor10, "Verde", "GLX");

try {
    $carro1->abastecer(10);
    
    $carro1->ligar();
    echo "depois de ligar!\n";
    $carro1->abastecer(-10);
    $carro1->acelerar(50);
    
} catch (Ford\IEException $ex) {
    echo "Problema no IE: ".$ex->getMessage()."\n";
} catch (\InvalidArgumentException $ex) {
    echo "Problemas com funções: ".$ex."\n";
} finally {
    echo "Sempre que acontecer exception!\n";
}

var_dump($carro1);

$carro2 = new Carro($motor20, "Preto", "ELX");

var_dump($carro2);

$carro3 = new Carro($motorDiesel, "Laranja", "GTX");

var_dump($carro3);

*/

/*
echo $carro1->combustivel."\n";
$carro1->combustivel = 10;
$carro1->buzinar();

echo Carro::MARCA."\n";

var_dump($motor10, $carro1);
*/

/*

$carro1->cor = "Preto";

$carro2 = new Carro();

$carro3 = clone $carro1;

$carro3->cor = "Vermelho";

var_dump($carro1);
var_dump($carro2);
var_dump($carro3);

if ($carro1 == $carro2) {
    echo "São iguais!\n";
} else {
    echo "São diferentes!\n";
}

if ($carro1 === $carro2) {
    echo "São iguais!\n";
} else {
    echo "São diferentes!\n";
}

if ($carro3 instanceof Carro) {
    echo "É classe Carro!\n";
}

$carro1->ligar();

$carro1->desligar();

$carro1->abastecer(5);

$carro1->ligar();

$carro1->desligar();

$carro1->abastecer(30);
    
 * 
 */

/*
$vet = array(10,23,43);
echo count($vet)."\n";

$motor20->acelerar(13);
echo count($motor20)."\n";
*/
