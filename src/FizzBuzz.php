<?php

namespace Deg540\DockerPHPBoilerplate;
class FizzBuzz
{
    const FIZZ_BUZZ = 'FizzBuzz';
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';
    const FIZZ_NUMBER = 3;
    const BUZZ_NUMBER = 5;
    public function execute(int $number): int|string
    {
        if ($this->isFizzBuzz($number)) {
            return self::FIZZ_BUZZ;
        }

        if ($this->isFizz($number)) {
            return self::FIZZ;
        }

        if ($this->isBuzz($number)){
            return self::BUZZ;
        }

        return $number;
    }

    public function isDivisibleByThree(int $number): bool
    {
        return $number % self::FIZZ_NUMBER == 0;
    }

    public function isDivisibleByFive(int $number): bool
    {
        return $number % self::BUZZ_NUMBER == 0;
    }

    public function isFizzBuzz(int $number): bool
    {
        return $this->isDivisibleByThree($number) && $this->isDivisibleByFive($number);
    }

    public function containsTheNumberThree(int $number): bool
    {
        return str_contains($number, self::FIZZ_NUMBER);
    }

    public function containsTheNumberFive(int $number): bool
    {
        return str_contains($number, self::BUZZ_NUMBER);
    }

    public function isFizz(int $number): bool
    {
        return $this->isDivisibleByThree($number) || $this->containsTheNumberThree($number);
    }

    public function isBuzz(int $number): bool
    {
        return $this->isDivisibleByFive($number) || $this->containsTheNumberFive($number);
    }
}