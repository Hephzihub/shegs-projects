<?php
$play_count = 0;
$correct_guesses = 0;
$guess_head = 0;
$guess_tail = 0;

echo "Abarakadabra... Are you good at guessing??\nThis game allows you to guess if a coin is head or tail, head being 1 and tail being 2. It can be played 10 times and tells you the percentage you guessed right\n";

function coinGuess()
{
global $play_count, $correct_guesses, $guess_head, $guess_tail;

$play_count++;

$ran_numb = rand(1, 2);

echo "\nAre you ready? Ha!ha!! Guess if the coin is head(1) or tail(2)... Enter the number?\n";


$player_guess = intval(readline(">>"));
if ($player_guess > 2){
  echo "your number is greater than 2. \nEnter a number between 1 to 2\n";
  $player_guess = intval(readline(">>"));
}

if ($player_guess === 0){
  echo "your number is less than 1. \nEnter a number between 1 to 2\n";
  $player_guess = intval(readline(">>"));
}

if ($player_guess = 1){
  $player_coin = "Head";
}elseif ($player_guess = 2){
  $player_coin = "Tail";
}


echo "\nYou are in round $play_count\nYour guess is $player_coin";

if ($player_guess === $ran_numb){
  $correct_guesses++;
}

$per_right = ($correct_guesses/$play_count) * 100;

echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $per_right% of the time.\n";
/*
if ($guess_high >  $guess_low){
  echo "When you guessed wrong, you tended to guess high.\n";
} elseif ($guess_high <  $guess_low) {
  echo "When you guessed wrong, you tended to guess low.\n";
}*/
}

coinGuess();
coinGuess();
coinGuess();
coinGuess();
coinGuess();
coinGuess();
coinGuess();
coinGuess();
coinGuess();
coinGuess();
