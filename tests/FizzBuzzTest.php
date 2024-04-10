<?php

use Deg540\DockerPHPBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function given1Returns1()
    {
        $fizzBuzzResult = $this->fizzBuzz->execute(1);

        $this->assertEquals(1, $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenANumberDivisibleByThreeReturnsFizz()
    {
        $fizzBuzzResult = $this->fizzBuzz->execute(3);

        $this->assertEquals('Fizz', $fizzBuzzResult);
    }
}