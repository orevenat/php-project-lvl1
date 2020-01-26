<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

const GAMES_LIST = [
    'brain-calc' => [
        'rules' => 'What is the result of the expression?',
        'engine' => 'BrainGames\games\Calc\play'
    ],
    'brain-even' => [
        'rules' => 'Answer "yes" if the number is even, otherwise answer "no"',
        'engine' => 'BrainGames\games\Even\play'
    ]
];

function run(string $gameName, int $roundCount = 3)
{
    $game = GAMES_LIST[$gameName];

    line('Welcome to the Brain Games!');
    line($game['rules'] . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i <= $roundCount; $i++) {
        [$message, $correctAnswer] = call_user_func($game['engine']);

        $userAnswer = prompt($message);
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
