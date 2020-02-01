<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no"';

function play()
{
    $game = function () {
        $question = rand(1, 99);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    run(RULES, $game);
}

function isEven(int $number)
{
    return $number % 2 === 0;
}
