<?php

//! Quiz Question 1
echo "<br>Q1<br>";
echo "<br>";

echo "Using for loops<br>";

//? For Loops
//rows 1 to 5 
for ($rows=1;$rows<=5;$rows++){

    //columns stars less or equal to row
    for ($columns=1;$columns<=$rows;$columns++){
        echo '*';
    }
    echo "<br>";
}

//?Reverse

echo "<br>";
//from top
for ($rows=1;$rows<=5;$rows++){

    //stars less or equal to row
    for ($columns=1;$columns<=$rows;$columns++){
        echo '*';
    }
    echo "<br>";
}

//start 5 -> 1
for ($rows=5;$rows>=1;$rows--){
    
    //still same 
    for ($columns=1;$columns<=$rows;$columns++){
        echo "*";
    }
    echo "<br>";
}



echo "Using for While<br>";

$rows=1; //initial
while ($rows<=5){ //condition
    $columns=1;
    while ($columns<=$rows){
        echo "*";
        $columns++;
    }
    $rows++; //process
    echo "<br>";
}

echo "<br>";


$rows=1;
while ($rows<=5){
    $columns=1;
    while ($columns<=$rows){
        echo "*";
        $columns++;
    }
    $rows++;
    echo "<br>";
}

$rows=5;
while ($rows>=1){
    $columns=1;
    while ($columns<=$rows){
        echo "*";
        $columns++;
    }
    $rows--;
    echo "<br>";
}






//!Quiz Question 2


//find sum between 1-29
echo "<br>Q2<br>";
echo "<br>";

$sum=0;
for ($a=0;$a<30;$a++)
{
    $sum += $a;
}


echo "The sum between 0 to 30 (or 1 to 29) is <b>$sum</b> <br>";

//!Quiz Question 3

echo "<br/>Q3<br/>";

$sum3= 0;

for($b=30;$b<=50;$b++){
    echo "<br>the list: $b"; //display

    if ($b%2 !=0){
        $sum3+=$b; //sum of odds
    }
}

echo "<br>sum of odds: <b>$sum3</b> <br>";



//!Quiz Question 4
echo "<br/>Q4<br/>";

$ori = "Hello there my name is Kevin";
$new = str_replace(' ','%',$ori); //store in new var

echo $new; //display new var

$countPercent = substr_count($new,"%"); //in new how many %

echo "<br>number % is $countPercent"; 

?>