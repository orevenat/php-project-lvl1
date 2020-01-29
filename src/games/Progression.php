<?php

namespace BrainGames\games\Progression;

function play()
{
    $randomPosition = rand(1, 10);
    $progression = makeProgression();
    $questionArr = array_replace($progression, [$randomPosition => '..']);
    $question = implode(' ', $questionArr);
    $questionMessage = "Question: {$question}";
    $correctAnswer = (string) $progression[$randomPosition];

    return [$questionMessage, $correctAnswer];
}

function makeProgression($size = 10)
{
    $initValue = rand(1, 10);
    $step = rand(1, 5);

    $result = [];
    for ($i = 1; $i <= $size; $i += 1) {
        $result[] += $initValue + ($i * $step);
    }

    return $result;
}
