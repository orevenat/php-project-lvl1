# Учебный проект "Brain Games"

[![Maintainability](https://api.codeclimate.com/v1/badges/527b54fdabc1795a0def/maintainability)](https://codeclimate.com/github/orevenat/php-project-lvl1/maintainability)
[![Build Status](https://travis-ci.org/orevenat/php-project-lvl1.svg?branch=master)](https://travis-ci.org/orevenat/php-project-lvl1)

## Описание

В рамках проекта реализован набор мини-игр, запускаемых из консоли. Эти игры похожи на то, что обычно называют "Brain Games".

## Установка

```
$ composer global require orevenat/php-project-lvl1
```

## Игры

### brain-even

Суть игры в следующем: пользователю показывается случайное число. И ему нужно ответить yes, если число четное, или no - если нечетное

Запуск игры:

```
$ brain-even
```

[![asciicast](https://asciinema.org/a/296071.svg)](https://asciinema.org/a/296071)

### brain-calc

Суть игры в следующем: пользователю показывается случайное математическое выражение, например 35 + 16, которое нужно вычислить и записать правильный ответ.

Запуск игры:

```
$ brain-calc
```

[![asciicast](https://asciinema.org/a/296072.svg)](https://asciinema.org/a/296072)

### brain-gcd


Суть игры в следующем: пользователю показывается два случайных числа, например, 25 50. Пользователь должен вычислить и ввести наибольший общий делитель этих чисел. Вывод должен получиться следующий:

Запуск игры:

```
$ brain-gcd
```

[![asciicast](https://asciinema.org/a/296070.svg)](https://asciinema.org/a/296070)

### brain-progression

Показываем игроку ряд чисел, образующий арифметическую прогрессию, заменив любое из чисел двумя точками. Игрок должен определить это число.

Запуск игры:

```
$ brain-progression
```

[![asciicast](https://asciinema.org/a/296599.svg)](https://asciinema.org/a/296599)

### brain-prime

Простое ли число?

Запуск игры:
```
$ brain-prime
```

[![asciicast](https://asciinema.org/a/296608.svg)](https://asciinema.org/a/296608)
