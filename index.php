<?php

function bioscoopBezoeker($age){
    if($age < 16){
        return "{$age} jaar is te jong voor deze film.";
    } elseif($age >= 16 && $age < 18 ){
        return "{$age}, je hebt ouderlijk toezicht nodig.";
    } else {
        return "Je bent al {$age} jaar. Geniet van de film!";
    }
}

for($i = 0; $i < 21; ++$i){
    echo bioscoopBezoeker($i);
    echo '<br>';
}