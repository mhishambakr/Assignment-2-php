<?php
echo "Assignment 2";
echo "<hr/>";
// ===================================================================================================================

echo "1- Search</br>";
$films = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";
for ($i = 0; $i<count($films); $i++){
    if ($films[$i] == $keyword){
        echo "YES";
    break;
    } elseif($i == count($films) -1){
        echo "NO";
    }
}
echo "<hr/>";
// ===================================================================================================================

echo "2- Counting</br>";
$films = array("avatar", "Prestige", "avatar", "prestige");
$keyword = "avatar";
$count = 0;
for ($i=0; $i<count($films); $i++){
    if ($films[$i] == $keyword){
        $count ++;
    }
}
echo $count."</br>";
echo "<hr/>";
// ===================================================================================================================

echo "3- Reverse"."<br/>";
$films = array("avatar", "Prestige", "avatar", "prestige");
for ($i = count($films) - 1; $i >= 0; $i--){
    echo $films[$i]."-";
}
echo "<hr/>";
// ===================================================================================================================

echo "4-a- Boolean</br>";

define('boolean', 'boolean'); // used for the Warning: Use of undefined constant boolean - assumed 'boolean' (this will throw an Error in a future version of PHP)

$tests=array(1,"tariq",1.5,true,7,'s',false);
for ($i = 0; $i<count($tests); $i++){
    if (gettype($tests[$i]) == boolean){
        if ($tests[$i] == true){
            echo "Yes - ";
        } else{
            echo "No - ";
        }
    } else{
        echo $tests[$i]. " - ";
    }
}
echo "<hr/>";
// ===================================================================================================================

echo "4-b- Boolean</br>";
$tests=array(1,"tariq",1.5,true,7,'s',false);
$i = 0;
while ($i < count($tests)){
    if (gettype($tests[$i]) == boolean){
        if ($tests[$i] == true){
            echo "Yes - ";
        } else{
            echo "No - ";
        }
    } else{
        echo $tests[$i]. " - ";
    }
    $i++;
}
echo "<hr/>";
// ===================================================================================================================

echo "5-Max</br>";
$tests=array(5,4,9,3,1,7,5,8,6);
$x = 0;
for ($i = 0; $i < count($tests); $i++){
    $y=$tests[$i];
    if ($y > $x)
        $x = $y;
}
echo $x;
echo "<hr/>";
// ===================================================================================================================

echo "6- Sum </br>";
$tests=array(5,4,9,3,1,7,5,8,6);
$sum = 0;
for ($i = 0; $i < count($tests); $i++){
    $sum += $tests[$i];
}
echo $sum;
echo "<hr/>";
// ===================================================================================================================

echo "7- average </br>";
$tests=array(6,4,9,3,12,8,7);
$sum = 0;
for ($i = 0; $i < count($tests); $i++){
    $sum += $tests[$i];
}
$average = $sum / count($tests);
echo $average;
echo "<hr/>";
// ===================================================================================================================

echo "8- Sorting</br>";

$tests=array(6,4,9,3,12,8,7);

$x = 0;
for ($j = 0; $j < count($tests); $j++){
    for ($i = 0; $i < count($tests) - 1; $i++){
        if ($tests[$i]> $tests[$i+1]){
            $x = $tests[$i];
            $tests[$i] = $tests[$i+1];
            $tests[$i+1] = $x;
        }
    }
}
for ($i = 0; $i<count($tests); $i++){
    echo $tests[$i].", ";
}
echo "<hr/>";
// ===================================================================================================================
?>