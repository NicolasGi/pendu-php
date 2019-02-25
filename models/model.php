<?php

function getWordsArray()
{
    return file(FILE_PATH);
}

function getRandomIndex($wordsArray) //recupere un nombre aléatoire
{
    return rand(0, count($wordsArray)-1);
}

function getWord($index, $wordsArray)
{
    return $wordsArray[$index];
}

function getRemplacement($letterNbre)
{
    return  str_repeat(REPLACEMENT, $letterNbre) ;
}

function getNumberLetter($word)
{
    return strlen($word)-1;
}