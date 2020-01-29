<?php

namespace BrainGames\games\Calc;

function play()
{
    $number1 = rand(1, 50);
    $number2 = rand(1, 10);
    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];
    $question = "{$number1} {$operation} {$number2}";
    $questionMessage = "Question: {$question}";
    $correctAnswer = 0;
    switch ($operation) {
        case '+':
            $correctAnswer = $number1 + $number2;
            break;
        case '-':
            $correctAnswer = $number1 - $number2;
            break;
        case '*':
            $correctAnswer = $number1 * $number2;
            break;
    }

    return [$questionMessage, (string) $correctAnswer];
}
