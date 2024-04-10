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
    public function givenOneNumberReturnThatNumber()
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

    /**
     * @test
     */
    public function givenANumberThatContainsTheNumberThreeReturnsFizz()
    {
        $fizzBuzzResult = $this->fizzBuzz->execute(3);

        $this->assertEquals('Fizz', $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenANumberDivisibleByFiveReturnsBuzz()
    {
        $fizzBuzzResult = $this->fizzBuzz->execute(5);

        $this->assertEquals('Buzz', $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenANumberThatContainsTheNumberFiveReturnsBuzz()
    {
        $fizzBuzzResult = $this->fizzBuzz->execute(5);

        $this->assertEquals('Buzz', $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenANumberDivisibleByThreeAndFiveReturnsFizzBuzz()
    {
        $fizzBuzzResult = $this->fizzBuzz->execute(15);

        $this->assertEquals('FizzBuzz', $fizzBuzzResult);
    }
}