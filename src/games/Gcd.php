<?php

namespace BrainGames\games\Gcd;

function play()
{
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $question = "{$number1} {$number2}";
    $questionMessage = "Question: {$question}";
    $correctAnswer = (string) gcd($number1, $number2);

    return [$questionMessage, $correctAnswer];
}

function gcd(int $num1, int $num2)
{
    $iter = function ($num, $acc) use (&$iter, $num1, $num2) {
        if ($num >= $num1 && $num >= $num2) {
            return $acc;
        }

        $newAcc = ($num1 % $num === 0 && $num2 % $num === 0) ? $num : $acc;

        return $iter($num + 1, $newAcc);
    };

    return $iter(2, 1);
}
