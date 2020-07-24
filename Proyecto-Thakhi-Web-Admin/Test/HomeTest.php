<?php
require_once 'PHPUnit/Home.php';
class HomeTest extends PHPUnit_Framework_TestCase
{
    public function testHome()
    {
    	//$this->cliente = new \App\Models\Cliente;
    	//$model = $this->cliente->listar();
    	$model = array("foo", "bar", "hello", "world");
        $c=new Home();
        $this->assertEquals(5,$c->contadorentregas($model));
         //$this->assertEquals('Conectado', $c->Conectar('Conectado'));        

    }
} 

?>
