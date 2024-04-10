<?php

namespace Deg540\DockerPHPBoilerplate;
class FizzBuzz
{
    public function execute(int $number): int|string
    {
        if ($number % 3 == 0 && $number % 5 == 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 == 0) {
            return 'Fizz';
        }

        if ($number % 5 == 0){
            return 'Buzz';
        }

        return $number;
    }
}