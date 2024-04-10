<?php


use Deg540\DockerPHPBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function given1Returns1()
    {
        $fizzBuzz = new FizzBuzz();

        $fizzBuzzResult = $fizzBuzz->execute(1);

        $this->assertEquals(1, $fizzBuzzResult);
    }
}