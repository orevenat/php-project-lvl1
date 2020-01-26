<?php

namespace BrainGames\games\Even;

function play()
{
    $number = rand(1, 99);
    $message = "Question: {$number}";
    $correctAnswer = isEven($number) ? 'yes' : 'no';

    return [$message, $correctAnswer];
}

function isEven(int $number)
{
    return $number % 2 === 0;
}
