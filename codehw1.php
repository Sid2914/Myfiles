<!DOCTYPE html>
<html>
<head>
<style>
main {
  width: 50px;
  height: 50px;
  background: red;
  position: relative;
  animation: myfirst 5s 2;
  animation-direction: alternate;
}
@keyframes myfirst {
  0%   {background: red; left: 0px; top: 0px;}
  25%  {background: yellow; left: 1280px; top: 0px;}
    50%  {background: green; left: 0px; top: 0px;}

}
#example1
{
  border: 10px dashed black;
  padding: 25px;
  background-repeat: no-repeat;
  background-origin: padding-box;
}
</style>
<title> CHALLENGE : CORRECT CHANGE </title>

</head>
<div id="example1">
<body> 
<h1> CHALLENGE : CORRECT CHANGE </h1>
<?php 
$mycent = "1";
$mynickel = "5";
$mydime = "10";
$myquarter = "25";
$mydollar = "100";
$mycents = Null;
$mynickels = Null;
$mydimes = Null;
$myquarters = Null;
$mydollars = Null;

$myvalue = "159";
echo "You are due $myvalue cents back in charge total";
echo "<br>";

do
{
	if($myvalue >= 100)
	{ 
      $mydollars = floor($myvalue / $mydollar);
	  $myvalue = $myvalue % $mydollar;
	}
    else if($myvalue >= 25)
	{ 
      $myquarters = floor($myvalue / $myquarter);
	  $myvalue = $myvalue % $myquarter;
	}
	else if($myvalue >= 10)
	{ 
      $mydimes = floor($myvalue / $mydime);
	  $myvalue = $myvalue % $mydime;
	}
	else if($myvalue >= 5)
	{ 
      $mynickels = floor($myvalue / $mynickel);
	  $myvalue = $myvalue % $mynickel;
	}
	else if($myvalue >= 1)
	{ 
      $mycents = floor($myvalue / $mycent);
	  $myvalue = $myvalue % $mycent;
	}
}
while($myvalue != 0);
	
echo " You are due back $mydollars dollar(s), $myquarters quarter(s), $mydimes dime(s), $mynickels nickel(s), $mycents cent(s)";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "</div>";
echo "<br>";
echo "<br>";
echo "<main>";
echo "</main>";
echo "<br>";
echo "<br>";
echo "<div id=\"example1\">";
echo "<h1>";


echo "CHALLENGE : 99 BOTTLES OF BEER";
echo "</h1>";
$mybeer= 15;
for ($count=$mybeer; $count>0; --$count)
{
	echo "$count bottles of beer on the wall, $count bottles of beer!";
	echo "<br>";
	--$count;
    echo "Take one down, pass it around,$count bottles of beer on the wall!";
	echo "<br>";
	++$count;
}	
?> 
</div>
</body>
