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
//foreach ($animals as $animal)
        //if(str_word_count()) {
            //$allAnimals = array();
            //foreach ($animals)

        //array_push($allAnimals, $animal);
            //echo $animal, '<br>';
       //};

        //if (str_word_count($animal)) {
        //    array_push($twoWordsAnimals, $animal);
        //}
//print_r($allAnimals);

//foreach ($allAnimals as $animal) {

//}

$animalsString = implode(" ", $allAnimals);

//echo $animalsString;//выводим строку с названиями животных

$animalsArray = explode(" ", $animalsString);
//print_r($animalsArray);

$evenWordsArray = array();
$oddWordsArray = array();


foreach ($animalsArray as $key => $evenWord) {
    if (($key + 1) % 2 != 0) {
        //echo $evenWord . '<br />';
        array_push($evenWordsArray, $evenWord);
    }
}

//echo "<br />";
//print_r($oddWordsArray);

//print_r($evenWordsArray);

//reset($animalsArray);

/* Выводим не парные */
foreach ($animalsArray as $key => $oddWord) {
    if (($key + 1) % 2 == 0) {
        //echo $oddWord . '<br />';
        array_push($oddWordsArray, $oddWord);
    }
}

//echo "<br />";
//print_r($oddWordsArray);

shuffle($evenWordsArray);
shuffle($oddWordsArray);

//print_r($evenWordsArray);
//echo "<br />";
//print_r($oddWordsArray);
//echo "<br />";

$x = count($evenWordsArray);
//echo $x;

$a=0;
while (++$a<$x)
    echo $evenWordsArray[$a] . " " . $oddWordsArray[$a] . "<br />";

?>

