<?php


// CalculadoraTest.php
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase {
    public function testSumar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(3, 5);
        $this->assertEquals(8, $resultado);
    }

    public function testRestar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->restar(10, 4);
        $this->assertEquals(6, $resultado);
    }

    public function testMultiplicar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->multiplicar(2, 3);
        $this->assertEquals(6, $resultado);
    }

    public function testDividir() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->dividir(10, 2);
        $this->assertEquals(5, $resultado);
    }

    public function testDividirPorCero() {
        $this->expectException(InvalidArgumentException::class);

        $calculadora = new Calculadora();
        $calculadora->dividir(5, 0);
    }
}


?>