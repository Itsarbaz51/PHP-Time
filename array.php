<?php

//  two types array

// 1. simple array
$ar = array("jaipur", "sikar", "jodhpur", "bikaner");
print_r($ar);
echo "<br>";

for ($i=0; $i < count($ar); $i++) { 
    echo $ar[$i];
    echo "<br>";
}

// slice/short the array
$short = array_slice($ar,1,3);
print_r($short);
echo "<br>";

// 2. assositive array
$arr=["a"=>"jaipur", "b"=>"sikar", "c"=>"jodhpur"];
print_r($arr);
echo "<br>";


$array1=array("mon", "tue", "wed", "sat");
$array2=array("mon", "thus", "wed", "feb");
$array3=array("mon", "thus", "fri", "sat");

// check the comman value
$newArray = array_intersect($array1, $array2);
$newArray = array_intersect($array1, $array2, $array3);
print_r($newArray);
echo "<br>";

// check the diffrent value
$newArray2 = array_diff($array1, $array2);
print_r($newArray2);
echo "<br>";

// uniqu
$arrr=array('BTech', 'MCA', 'BTech', 'MTech', 'MCA', 'BCA');
$uniqe=array_unique($arr);
print_r($uniqe);
echo "<br>";

//calculate the one by one element
function multi($n){
    if ($n%2 === 0) 
        echo "even <br>";
     else 
        echo "odd <br>";

    
}
$arrr1=array(5, 10, 15);
$newarrr1=array_map('multi', $arrr1);
print_r($newarrr1);
echo "<br>";



// range
$rangee= range(1,20);
print_r($rangee)."<br>";
for ($i=0; $i <count($rangee) ; $i++) { 
    echo $rangee[$i]."<br>";
}












