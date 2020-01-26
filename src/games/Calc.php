<?php

namespace BrainGames\games\Calc;

function play()
{
    $number1 = rand(1, 50);
    $number2 = rand(1, 10);
    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];
    $message = "{$number1} {$operation} {$number2}";
    $result = 0;
    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
    }

    return [$message, (string) $result];
}
