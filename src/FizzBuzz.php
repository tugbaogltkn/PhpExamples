<?php

class FizzBuzz
{

    public function fizz_buzz($finish)
    {
        $fizzbuzz = [];

        for($i = 1; $i <= $finish; $i++) {
            if($i % 3 == 0 && $i % 5 == 0) {
                array_push($fizzbuzz, 'fizzbuzz');
            } elseif ($i % 3 == 0) {
                array_push($fizzbuzz, 'fizz');
            } elseif ($i % 5 == 0) {
                array_push($fizzbuzz, 'buzz');
            } else {
                array_push($fizzbuzz, $i);
            }
        }
        return $fizzbuzz;
    }
}
