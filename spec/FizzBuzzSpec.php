<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_return_for_1_to_5()
    {
        $this->fizz_buzz(5)->shouldReturn([1, 2, 'fizz', 4, 'buzz']);
    }

    function it_is_return_for_1_to_15()
    {
        $this->fizz_buzz(15)->shouldReturn([1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz']);
    }
}
