<?php

$anas = 15;
$ahmed = 15;
if($anas<$ahmed){
echo"hello ahmed";
    echo"<br>";
}
elseif($anas>20){
    echo"hello anoos ";
}
else
echo"not found"; 
echo"<br>";
//if,elseif,else//
$boys = array("anas","ahmed","nader");
var_dump($boys
);
echo"<br>";

if("nadr">=2555)
{ echo"hello anas";}
else echo"yes you can";
//another example//
echo"<br>";
$page = "ahmed";
if($page == "ahmed");
{echo"ahmed";}
//if we chane the value "ahmed " to any another object we will print that//
echo"<br>";
//example for switch//
$days = "ff";
switch($days){
case ("sat"):
    echo"hi it's saterday";
    break;
    case"sund";
echo"hi it's sunday";
break;
default:
echo"notfound";     }
echo"<br>";
//LOOP FOR EXAMPLE//
for($i=1;$i<50;$i+=5){
    echo "The number is: $i<br>";
};
#example for frorach loop......#
$colors = array("red" => 20, "green" =>30 , "blue" =>50, "yellow");

    foreach ($colors as $value) {
    echo "$value <br>";
}
////////
$animals = ["cats" =>10,"dogs" => 20,"cows" =>30 ];
foreach ($animals as $sort){
echo"$sort.<br>";
}
echo"<br>";
foreach($animals as $sort => $ages){
echo"we have alot of $sort of and they are $ages .<br> ";
}












