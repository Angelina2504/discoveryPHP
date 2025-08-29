<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

$length1 = strlen($message1)/2;
$recovery1 = substr($message1, 5, $length1);
$replace1 = str_replace('@#?', ' ', $recovery1);
$reverse1 = strrev($replace1);

$length2 = strlen($message2)/2;
$recovery2 = substr($message2, 5, $length2);
$replace2 = str_replace('@#?', ' ', $recovery2);
$reverse2 = strrev($replace2);

$length3 = strlen($message3)/2;
$recovery3 = substr($message3, 5, $length3);
$replace3 = str_replace('@#?', ' ', $recovery3);
$reverse3 = strrev($replace3);

echo $reverse1 . ' ' . $reverse2 . ' ' . $reverse3;