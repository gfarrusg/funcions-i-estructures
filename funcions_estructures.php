<?php

echo " <h1>Exercici 1 Tema Funcions i Estructures de control.</h1>";

$num = 40;

if(($num%2) == 0){
    
    echo "És un número parell, ja que el número és: ".$num;
}Else{
    echo "És un número imparell, ja que  el número és: ".$num;
}

echo " <h1>Exercici 2 Tema Funcions i Estructures de control.</h1>";

echo " El trampós comptarà així: ".'<br />'; 
    
    for($i = 0; $i <= 10; $i+=2){
    echo $i .'<br />';
}

echo " <h1>Exercici 3 Tema Funcions i Estructures de control.</h1>";

$n = rand(1,100);

for($i = 1; $i <= $n; $i++){
    echo $i .'<br />';
}



echo " <h1>Exercici 4 Tema Funcions i Estructures de control.</h1>";

    function amagatall(){
        $i = 1;
        $n = 10;
        for($i = 1; $i <= $n; $i++){
            echo $i .'<br />';
        }
    }
    amagatall();


echo " <h1>Exercici 5 Tema Funcions i Estructures de control.</h1>";

$note = rand(1,100);

switch($note) {
    
    case  ($note <= 33):
        echo "Estudiant reprovarà.";
    break;

    case  (($note >= 33) && ($note <= 44)):
        echo "El grau hauria de ser Tercera Divisió.";
    break;

    case  (($note >= 45) && ($note <= 59)):
        echo "El grau hauria de ser Segona Divisió.";
    break;

    case  ($note >= 60):
        echo"El grau hauria de ser Primera Divisió.";
    break;
    
    default;
        echo "Si us plau posa un nombre real." ;
    break;
}

echo " <h1>Exercici 6 Tema Funcions i Estructures de control.</h1>";

$isbitte = rand(1,2) == 1;

    if($isbitte){
        echo "mossega".'<br />';
    } else {
        echo "no mossega".'<br />';
    }

?>