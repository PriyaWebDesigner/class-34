

<?php

//conditional statement 

// $marks = [90,80,70,102,50,40,30];

// for($i=0; $i<=6; $i++){
//     if($marks[i]>100){
//         echo 'The Grade is = Invalide';
//     }
// }
// elseif($marks[i]>=80){
//     echo 'The Grade is = A+';
// }

$marks = 40;

if($marks>=33){
    echo 'The Grade is = B <br>';
}

elseif($marks>=50){
     echo 'The Grade is = A+';
    }

else{
    echo 'Fail <br>';
}

//Switch Case 
$color = 'Orange';

switch($color){
    case 'Green';
    echo 'Success <br>';
    break;

    case 'Orange';
    echo 'Warning <br>';
    break;


    case 'Black';
    echo 'Secondary <br>';
    break;

   default;
   echo 'Failure <br>';
   break;
}

$marks = 80;

switch($marks){
    case '90';
    echo 'A+ <br>';
    break;

    case '80';
    echo 'A <br>';
    break;

    default;
    echo 'Failure <br>';
    break;
}

//for loop
$array = [20,40,50,70];

// echo $array[0] . ' ';
// echo $array[1] . ' ';
// echo $array[2] . ' ';
// echo $array[3] . ' ';

for($i=0; $i<=3; $i++){
    echo $array[$i] . ' ';
    echo $i .'<br>';
}

//for each
$array = [20,40,50,70];

foreach($array as $element){
    echo $element . ' ';
}

//while loop
$array = [20,40,50,70];

$i = 0;
while($i<=3){
    echo $array[$i] . '<br>' . ' ';
    $i++;
}

//do while loop
$array = [20,40,50,70];

$i=o;
do{
    echo $array[$i] . ' ';
    $i++;
}

while($i<=3);




?>