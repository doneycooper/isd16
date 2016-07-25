<?php
//My first php
echo 'Paul Doney';
echo '<br />';
echo 'c123456';
echo '<h2>Using Escape Characters</h2>';
echo '"most programmers say it\'s better to use \'echo\' rather than \'print\'" says who?';
echo '<h2>Variables</h2>';
$name='David';
$age=12;
echo 'Hi my name is '.$name.' and I am '.$age.' years old';
echo '<br />';
print "Mi nombre es $name y tengo $age anos de edad";
echo '<br />';
$height_meters=1.8;
$fully_grown=TRUE;
echo gettype($name);
echo '<br />';
echo gettype($age);
echo '<br />';
echo gettype($height_meters);
echo '<br />';
echo gettype($fully_grown);
echo '<br />';
$num1=9;
$num2=12;
echo 'num1 = '.$num1.'<br />';
echo 'num2 = '.$num2.'<br />';
$result=$num1*$num2;
echo 'num1 x num 2 = '.$result.'<br />';
$result=($num1/$num2)*100;
echo 'num1 as a percentage of num2 = '.$result.'%<br />';
$result=floor($num2/$num1);
$remainder=$num2%$num1;
echo 'num2 divided by num1 = '.$result.' remainder '.$remainder.'<br />';
$height_total_inches=($height_meters*100)/2.54;
$height_feet=floor($height_total_inches/12);
$height_inches=$height_total_inches%12;
echo 'Name:'.$name.'<br />';
echo 'Age:'.$age.'<br />';
echo 'Height in meters:'.$height_meters.'<br />';
echo 'Height in feet and inches:'.$height_feet.'ft '.$height_inches.'ins'.'<br />';
echo '<h2>Selection</h2>';
$day = date('l');
//$day='Wednesday';
if($day=='Wednesday'){
    echo 'it\'s midweek<br />';
}else{
    echo 'it\'s not midweek<br />';
}
$hour=date('G');
if($hour<12){
    echo 'Good Morning<br />';
}elseif($hour>11 && $hour<18){
    echo 'Good Afternoon<br />';
}else{
    echo 'Good Night<br />';
}
$day_of_year=date('z');
if($day_of_year<183){
    echo 'First half of the year<br />';
}elseif($day_of_year>183){
    echo 'Second half of the year<br />';
}else{
    echo 'Middle of the year<br />';
}
$price=25;
$age=27;
$member=TRUE;
if ($age<12){
    $total=$price*.5;
    if($member){
        $total=$total*.9;   
    }
}
if (($age>=12 && $age<=18) || $age>65){
    $total=$price*.75;
    if($member){
        $total=$total*.9;   
    }
}
if ($age>=18 && $age<65){
    $total=$price*1;
    if($member){
        $total=$total*.9;   
    }
}
$total=number_format($total,2);
print "The ticket price after all discounts is $total"
?>