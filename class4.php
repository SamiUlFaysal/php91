<?php
$a = 4;
$b = 5;

// echo $a <> 4,"<br>" ;
// echo $a != 4,"<br>" ;
// echo $a === $b,"<br>";
// echo $a !== $b,"<br>";
// echo $a++ <= 10 ;

for ($i=1; $i <10 ; $i++) { 

   echo 'hello world','<br>';
 }


echo $a<=>$b , "<br>";

// Ternary Operator

echo $a==5 ? "true":"false", "<br>";
echo isset($v) ? "yes it is": " no There's nothing ";

// Null Coalescing Operator

echo $s ??  8 ,"<br>";




// Control structure
$con = 10;
if ($con>10) {
    # code...
    echo "Hello Baby";
}else {
    echo "<h2>hhhh hhhhh hhhhh</h2>";
}

$new = 4;
if ($new == 1) {
    echo "One";
}elseif ($new==2) {
    echo "Two";
}elseif ($new==3) {
    echo "Three";
}elseif ($new==4) {
    echo "Four";
}elseif ($new==5) {
    echo "Five";
}else {
    echo "Not Found";
}
 echo "<br>";

$age = 50;
if ($age<=10 ||$a=0 ) {
    echo "Child";
}elseif ($age<=20) {
    echo "You Are Young";
}elseif ($age<=30) {
    echo "You Are Junior";
}elseif ($age<=50) {
    echo "You Are Most Young";
}else {
    echo "go to hell";
} 
echo "<br>";
$ss=5;
switch ($ss) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    case 4:
        echo "Four";
        break;
    case 5:
        echo "Five";
        break;
 

}

for ($i=2; $i <=20 ; $i++) { 
echo $i++ ,"<br>" ;
}

$xx=20;
while ($xx >=1) {
 echo $xx;
 $xx--;
}

echo "<br>";
$dd=1;
do {
    echo $dd++;
} while ($dd < 10);
echo '<br>';



















?>
