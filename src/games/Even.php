<?php

namespace BrainGames\games\Even;

function play()
{
    $question = rand(1, 99);
    $questionMessage = "Question: {$question}";
    $correctAnswer = isEven($question) ? 'yes' : 'no';

    return [$questionMessage, $correctAnswer];
}

function isEven(int $number)
{
    return $number % 2 === 0;
}
