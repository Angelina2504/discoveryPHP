<?php

$movies = [
    "Indiana Jones et le Temple maudit" => 1984,
    "Indiana Jones et la Dernière Croisade" => 1989,
    "Indiana Jones et le Royaume du crâne de cristal" => 2008
];

arsort($movies);

foreach ($movies as $title => $year){
    echo $year . " - " . $title . "<br>";
};

$moviesIndy = [
    "Indiana Jones et le Temple maudit" => ["Harrison Ford","Kate Capshaw", "Ke Huy Quan"],
    "Indiana Jones et la Dernière Croisade" => ["Harrison Ford", "Sean Connery", "Alison Doody"],
    "Indiana Jones et le Royaume du crâne de cristal" => [
        "Harrison Ford", "Cate Blanchett", "Shia LaBeouf"]
];

foreach ($moviesIndy as $movie => $actors){
    echo "Dans le film " . $movie . ", les principaux acteurs sont : " . implode(", ", $actors) . "<br>";
}