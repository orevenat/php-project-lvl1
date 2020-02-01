<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

const RULES = 'What number is missing in the progression?';

function play()
{
    $game = function () {
        $randomPosition = rand(1, 10);
        $progression = makeProgression();
        $questionArr = array_replace($progression, [$randomPosition => '..']);
        $question = implode(' ', $questionArr);
        $correctAnswer = (string) $progression[$randomPosition];

        return [$question, $correctAnswer];
    };


    run(RULES, $game);
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
