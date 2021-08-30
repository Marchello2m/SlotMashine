<?php

$winCards = [
    1=>320,
    2=>160,
    3=>80,
    4=>40,
    5=>20,
    6=>10

];
$money=[
    5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100
];



echo "Get ready to loos".PHP_EOL;


foreach ($winCards as $winCard)
{
//   echo $winCard.PHP_EOL;
}

$playerMoney = readline("Enter the money: ");

if(!in_array($playerMoney,$money))
{
    echo "Invalid choise".PHP_EOL;
    exit;
}
$card1=array_rand($winCards);
$card2=array_rand($winCards);
$card3=array_rand($winCards);

$card4=array_rand($winCards);
$card5=array_rand($winCards);
$card6=array_rand($winCards);

$card7=array_rand($winCards);
$card8=array_rand($winCards);
$card9=array_rand($winCards);



$line=$card1.' '.$card2.' '.$card3;
$line2=$card4.' '.$card5.' '.$card6;
$line3=$card7.' '.$card8.' '.$card9;

echo $line.PHP_EOL,
    $line2.PHP_EOL,
    $line3.PHP_EOL;

$loot=$playerMoney*$winCard;

if($card1==$card2&&$card3==$card2||$card4==$card5&&$card5==$card6||$card7==$card8&&$card8==$card9)
{
    echo "You Winn horizontal".PHP_EOL.$loot.PHP_EOL;


}if($card1==$card4&&$card4==$card7||$card2==$card5&&$card5==$card8||$card3==$card6&&$card6==$card9){
    echo "You winn vertical".PHP_EOL.$loot.PHP_EOL;

}if($card1==$card5&&$card5==$card9||$card3==$card5&&$card5==$card7)
{
    echo "You winn diognal".PHP_EOL.$loot.PHP_EOL;
}
else{
    echo "you Lose: ";
}


