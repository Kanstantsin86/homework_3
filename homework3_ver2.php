<?php

$continents = array ("Africa" => array ("Giraffa camelopardalis", "Hippopotamus amphibius constrictus","Panthera leo"),
    "Eurasia" => array ("Ailuropoda melanoleuca", "Bison bonasus", "Lepus europaeus"),
    "North America" => array ("Procyon lotor", "Mephitidae", "Canis latrans"),
    "South America" => array ("Lama glama", "Choloepus didactylus", "Tremarctos ornatus"),
    "Australia" => array ("Vombatidae", "Macropus rufus", "Phascolarctos cinereus"),
    "Antarctica" => array ("Leptonychotes weddelli", "Eudyptes chrysocome"),
);

$firstWords = [];
$secondWords = [];

foreach($continents as $continent => $animals){
    foreach($animals as $animal){
        $anim = explode(" ", $animal);
        if(count($anim) === 2){
            $firstWords[] = $anim[0];
            $secondWords[] = $anim[1];
        }
    }
}

shuffle($firstWords);
shuffle($secondWords);

echo "<h4>Выдуманные животные:</h4>";

for ($i = 0; $i < count($firstWords); $i++) {
echo $firstWords[$i] . " " . $secondWords[$i] . "<br />";
}

?>