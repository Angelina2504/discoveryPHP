<?php

$ani = ['serpent', 'singe'];
$ele = ['terre', 'feu'];

function writeSecretSentence(array $animals, array $elements): string
{
    $animal = $animals[rand(0, count($animals) - 1)];
    $element = $elements[rand(0, count($elements) - 1)];

    return $animal . " s'incline face à " . $element;
}

echo writeSecretSentence($ani, $ele);