<?php

$continents = array ("Africa" => array ("Giraffa camelopardalis", "Hippopotamus amphibius constrictus","Panthera leo"),
    "Eurasia" => array ("Ailuropoda melanoleuca", "Bison bonasus", "Lepus europaeus"),
    "North America" => array ("Procyon lotor", "Mephitidae", "Canis latrans"),
    "South America" => array ("Lama glama", "Choloepus didactylus", "Tremarctos ornatus"),
    "Australia" => array ("Vombatidae", "Macropus rufus", "Phascolarctos cinereus"),
    "Antarctica" => array ("Leptonychotes weddelli", "Eudyptes chrysocome"),
);

$twoWordsName = [];
foreach($continents as $continent => $animals){
    foreach($animals as $animal){
        $allAnimals= [];
        $anim = explode(' ', $animal);
        $allAnimals[]=$anim;

        foreach($allAnimals as $k){
            if(count($k) === 2){
                $separated = implode(",", $k);
                $str = str_replace(',', ' ', $separated);
                $twoWordsName[]=$str;
            }
        }
    }
}

foreach($twoWordsName as $name){
    $parts = explode(' ', $name);
    $firstWord[] = $parts[0];
    $secondWord[] = $parts[1];
}

$randomFirstWord = [];

while (count($randomFirstWord) < count($twoWordsName)){
    $test = $firstWord[rand(0, count($twoWordsName)-1)];
    if (!in_array($test, $randomFirstWord)) {
        $randomFirstWord[] = $test;
    }
}

$randomSecondWord = [];

while (count($randomSecondWord) < count($twoWordsName)){
    $test = $secondWord[rand(0, count($twoWordsName)-1)];
    if (!in_array($test, $randomSecondWord)) {
        $randomSecondWord[] = $test;
    }
}

$finalResult = [];

for($i = 0; $i < count($twoWordsName); $i++){
    $finalResult[]= $randomFirstWord[$i] . ' ' . $randomSecondWord[$i];

}

echo "<h4>Выдуманные животные:</h4>";

foreach ($finalResult as $value) {
    echo "$value <br />";
}

?>





