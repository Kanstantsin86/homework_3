<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 01.04.2018
 * Time: 20:23
 */
$continents = array ("Africa" => array ("Giraffa camelopardalis", "Hippopotamus amphibius constrictus","Panthera leo"),
                     "Eurasia" => array ("Ailuropoda melanoleuca", "Bison bonasus", "Lepus europaeus"),
                     "North America" => array ("Procyon lotor", "Mephitidae", "Canis latrans"),
                     "South America" => array ("Lama glama", "Choloepus didactylus", "Tremarctos ornatus"),
                     "Australia" => array ("Vombatidae", "Macropus rufus", "Phascolarctos cinereus"),
                     "Antarctica" => array ("Leptonychotes weddelli", "Eudyptes chrysocome")
);

$allAnimals = array();

foreach ($continents as $continent) {
    $allAnimals = array_merge($allAnimals, array_filter($continent, function ($animals) {
        return count(explode(' ', $animals)) === 2;
    }));

}

$animalsString = implode(" ", $allAnimals);

$animalsArray = explode(" ", $animalsString);

$evenWordsArray = array();
$oddWordsArray = array();


foreach ($animalsArray as $key => $evenWord) {
    if (($key + 1) % 2 != 0) {
        //echo $evenWord . '<br />';
        array_push($evenWordsArray, $evenWord);
    }
}

foreach ($animalsArray as $key => $oddWord) {
    if (($key + 1) % 2 == 0) {
        //echo $oddWord . '<br />';
        array_push($oddWordsArray, $oddWord);
    }
}

shuffle($evenWordsArray);
shuffle($oddWordsArray);

$x = count($evenWordsArray);

$a=0;

echo "<h4>Выдуманные животные:</h4>";

while (++$a<$x)
    echo $evenWordsArray[$a] . " " . $oddWordsArray[$a] . "<br />";

?>

