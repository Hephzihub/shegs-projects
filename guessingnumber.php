<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "Abarakadabra... Are you good at guessing??\nThis game allows you to guess a number between 1 and 10, it can be played 10 times and tells you percentage you guessed right\n";

function guessNumber()
{
global $play_count, $correct_guesses, $guess_high, $guess_low;

$play_count++;

$ran_numb = rand(1, 10);

echo "\nAre you ready? Ha!ha!! Think of a Number between 1 and 10... Enter the number?\n";


$player_guess = intval(readline(">>"));
if ($player_guess > 10){
  echo "your number is greater than 10. \nEnter a number between 1 to 10\n";
  $player_guess = intval(readline(">>"));
}

if ($player_guess === 0){
  echo "your number is less than 1. \nEnter a number between 1 to 10\n";
  $player_guess = intval(readline(">>"));
}



echo "\nYou are in round $play_count\nYour guess is $player_guess";

if ($player_guess === $ran_numb){
  $correct_guesses++;
}
if ($player_guess > $ran_numb){
  $guess_high++;
}
if ($player_guess < $ran_numb) {
  $guess_low--;
}

$per_right = ($correct_guesses/$play_count) * 100;

echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $per_right% of the time.\n";

if ($guess_high >  $guess_low){
  echo "When you guessed wrong, you tended to guess high.\n";
} elseif ($guess_high <  $guess_low) {
  echo "When you guessed wrong, you tended to guess low.\n";
}
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
