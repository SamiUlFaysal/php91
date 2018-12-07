<?php

#Array Based On Index:-
#Numarical Array:
$sg = array('0','1','sami','3');
echo $sg[3],"<br>";

#acociated Array:
$country=[ "a"=>"Bangladesh","b"=>"America","c"=>"Denmark","India" ];
echo $country["0"];
#.........................

#Array based on Dimention

#1/Single Array:
$single = array('0','1','sami','3');
echo $single[3],"<br>";
#.........................

#2/Nested Array:
$sss = [1,2,3,[4,5,7,[6,8,9]]];

echo $sss[3][3][2];

$nsted=[[5,7,[9,8=>10,[11,12]]]];

echo $nsted[0][2][9][0];

$nest=["c"=>["a"=>5,7,[9=>8,["sami",11]]]];
echo "<br>";
echo $nest["c"][1][10][0];
#.........................

$desh =["Bangladesh","India","Pakistan"];

echo "<br>",count($desh); #count is a php built in function

for ($i=0; $i <count($desh); $i++) { 
    # code...
    echo "<br>", $desh[$i];
}

#...................

$deshv =["a"=>"Bangladesh","b"=>"India","c"=>"Pakistan"];

foreach ($deshv as $value) {
    echo "<br>", $value ;
}

#.....................
foreach ($deshv as $k=>$value) {
    echo "$k=$value";
}
#.....................
?>
