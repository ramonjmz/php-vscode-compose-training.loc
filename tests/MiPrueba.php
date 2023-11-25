<?php

use PHPUnit\Framework\TestCase;

class MiPrueba extends TestCase
{
    public function testSaludoHolaMundo()
    {
        $saludo = "Hola Mundo";
        $this->assertEquals("Hola Mundo", $saludo);
    }
}