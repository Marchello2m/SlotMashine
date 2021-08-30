<?php
$board=[[],[],[]];
$rows =3;
$columns=4;

$payout =[
    'A'=>30,
    'B'=>20,
    'x'=>10
];



$coefs=[
    10=>1,
    20=>2,
    40=>3,
    80=>4

];
$playAmmount= (int)readline('Enter amount: ');
if(!in_array($playAmmount,array_keys($coefs))){
    echo "Invalid ammount";
    exit;
}



$symbols=array_keys($payout);


for ($r=0;$r<$rows;$r++)
{
    for ($c=0;$c<$columns;$c++)
    {
        $board[$r][$c]=$symbols[array_rand($symbols)];
    }
}
foreach ($board as $row)
{
    foreach ($row as $symbols)
    {
        echo $symbols.' ';
    }
    echo PHP_EOL;
}
$conditions=[
    [
        [0,0],[0,1],[0,2],[0,3]
    ],
    [
        [1,0],[1,1],[1,2],[1,3]
    ],
    [
        [2,0],[2,1],[2,2],[2,3]
    ],
    [
        [0,0],[0,1],[1,2],[2,3]
    ],
    [
        [0,3],[1,2],[1,1],[2,0]
    ],
    [
        [2,0],[1,1],[1,2],[0,3]
    ],
];
$youWon=0;

foreach ($conditions as $condition)
{
    $x=[];

    foreach ($condition as $positions)
    {

$row = $positions[0];
$column = $positions[1];

$x[]=$board[$row][$column];

    }
    if(count(array_unique($x))==1){


        $youWon+= $payout[$x[0]];
    }
}
echo "You won :".$youWon;
