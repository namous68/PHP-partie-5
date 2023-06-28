<?php
$months = array(
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
);

foreach ($months as $month) {
    echo $month . "<br>";
}

echo "<br>";
echo "<br>";
//ex02
$troisieme = $months[2];
 echo $troisieme;

 echo "<br>";
 echo "<br>";
 //ex03
 $index = $months[4];
 echo $index;

 echo "<br>";
 echo "<br>";
 //ex04
 $months[7] = 'août';
 echo $months[7];

 echo "<br>";
 echo "<br>";
 //ex05
 $departement = array(
    59 => 'nord',
    02 => 'aisne',
    60 =>'oise',
    62 =>'pas-de-calais',
    80 => 'somme'
 );
   foreach ($array as $departement){
    echo($departement);
   }

   echo "<br>";
 echo "<br>";
 //ex06
 echo $departement[59]; 

 echo "<br>";
 echo "<br>";
 //ex07
 $departement[51] = "reims";
 
 print_r($departement);
   
 echo "<br>";
 echo "<br>";
 //ex08
 foreach ($months as $month) {
    echo $month . "<br>";
}

 echo "<br>";
 echo "<br>";
 //ex09
 foreach ($departement as $nom) {
    echo $nom . "<br>";
}

?>