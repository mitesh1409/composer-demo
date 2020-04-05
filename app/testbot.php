<?php

use MyApp\Bot;

$bot = new Bot();

echo '<pre>';

echo $bot->hello();
echo '<br>';

echo $bot->checkEvenOdd(55);
echo '<br>';

echo $bot->dateAndTime();
echo '<br>';

echo $bot->bye();

echo '</pre>';
