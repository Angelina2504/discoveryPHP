<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; 

if ($opponentWeapon === 'gun'){
    $indyWeapon ='whip';
} elseif ($opponentWeapon === 'fists') {
    $indyWeapon = 'gun';
} elseif ($opponentWeapon === 'whip') {
    $indyWeapon = ' fists';
}


echo 'Le méchant se bat avec '. $opponentWeapon . ' mais indy gagne en se defendant avec ' . $indyWeapon;
