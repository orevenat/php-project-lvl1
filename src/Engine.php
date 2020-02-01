<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function run(string $rules, callable $game, int $roundCount = 3)
{
    line('Welcome to the Brain Games!');
    line($rules . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i <= $roundCount; $i++) {
        [$question, $correctAnswer] = $game();

        $questionMessage = "Question: {$question}";

        $userAnswer = prompt($questionMessage);
        if ($userAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line('Congratulations, %s!', $name);
}
