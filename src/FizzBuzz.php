<?php

namespace Deg540\DockerPHPBoilerplate;
class FizzBuzz
{
    public function execute(int $number): int|string
    {
        if ($this->isFizzBuzz($number)) {
            return 'FizzBuzz';
        }

        if ($this->isFizz($number)) {
            return 'Fizz';
        }

        if ($this->isBuzz($number)){
            return 'Buzz';
        }

        return $number;
    }

    public function isFizzBuzz(int $number): bool
    {
        return $this->isFizz($number) && $this->isBuzz($number);
    }

    public function isFizz(int $number): bool
    {
        return $this->isDivisibleByThree($number);
    }

    public function isBuzz(int $number): bool
    {
        return $this->isDivisibleByFive($number);
    }

    public function isDivisibleByThree(int $number): bool
    {
        return $number % 3 == 0;
    }

    public function isDivisibleByFive(int $number): bool
    {
        return $number % 5 == 0;
    }
}