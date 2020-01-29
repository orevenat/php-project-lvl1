<?php

namespace BrainGames\games\Prime;

function play()
{
    $question = rand(1, 100);
    $questionMessage = "Question: {$question}";
    $correctAnswer = isPrime($question) ? 'yes' : 'no';

    return [$questionMessage, $correctAnswer];
}

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
