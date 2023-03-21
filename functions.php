<?php

$letters = 'abcdefghijklmnopqrstuvyxz';
$symbols = '*/-=+?!^%&);{<>|.,:[}]';

function generatePassword($passLength, $letters, $symbols)
{
  $password = '';

  while (strlen($password) !== $passLength) {
    $indexLetter = rand(0, 24);
    $indexLetterUpper = rand(0, 24);
    $indexSymbol = rand(0, 22);
    $randomNumber = rand(0, 9);

    if (strlen($password) !== $passLength) {
      $password .= $letters[$indexLetter];
    }

    if (strlen($password) !== $passLength) {
      $password .= $randomNumber;
    }

    if (strlen($password) !== $passLength) {
      $password .= strtoupper($letters[$indexLetterUpper]);
    }

    if (strlen($password) !== $passLength) {
      $password .= $symbols[$indexSymbol];
    }
  }

  return $password;
}
