<?php

namespace Deg540\DockerPHPBoilerplate;
class FizzBuzz
{
    public function execute(int $number): int|string
    {
        if ($number % 3 == 0) {
            return 'Fizz';
        }

        return $number;
    }
}