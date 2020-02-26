<!DOCTYPE html>
<html>
<head>

<title>  Hey </title>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
  text-align: center;
}
#example1 {
  box-sizing: content-box;  
  width: 150px;
  height: 20px;
  padding: 30px;  
  border: 10px solid black;
  text-align: center;
}
</style>

</head>
<body> 
<?php

$books = array(
	array("PHP and MySQL Web Development","Luke Welling",144,"Paperback","31.63"),
	array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett",135,"Paperback","41.23"),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar",14,"Paperback","40.88"),
	array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett",251,"Paperback","22.09"),
	array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"Paperback","28.49"),
	array("Programming PHP","Kevin Tatroe",26,"Paperback","28.96")
	);


echo "<br>";
echo "<table id=\"t01\">
  <tr>
    <th>Title</th>
    <th>Author</th> 
    <th>Number of pages</th>
	<th>Type</th>
	<th>Price($)</th>
  </tr>";
  
for($a=0; $a<6; $a++)
{
	echo"<tr>";
	for($b=0; $b<5; $b++)
	{
		echo"<td>";
		echo $books[$a][$b];	
		echo"</td>";
	}
	echo"</tr>";
	
}

echo"</table>";
$sum=Null;
$sum1=Null;
$b = 4;
for($a=0; $a<6; $a++)

	{
		$sum1=$sum;
		$sum= $sum1 + $books[$a][$b];	
		
	}

echo "<div id=\"example1\">Total price: $sum </div>";





/* COIN TOSS PROBLEM STARTS HERE */


echo "<br>";echo "<br>";echo "<br>";
echo "<h1>";
echo "Coin Toss! - Part C";
echo "</h1>";


function random () {
    return mt_rand(0,1);  // return zero or one
}

function cointoss ($h) 
{
	echo "Number of heads you want to flip: ".$h." ";
	
$count2 = null;
$headcount=null;
echo "<br>";
while ($headcount<$h)
{	
    $toss = random();  // get current iteration's value
	 if($toss==0	) 
	 {
		  echo '<img src="Tails.png" style="width:40px;height:40px"/>' , "\n";
		 
		 $headcount=0;
	 }
	 else
	 {
		 echo '<img src="Heads.png" style="width:40px;height:40px"/>', "\n";
		
		 $headcount=$headcount+1;
		 
	 }
	++$count2;
} 

echo "<br>";
echo "<b>";
	echo "Flipped $h heads in a row, in ".$count2." flips";
	echo "</b>";
}

echo cointoss(4);



 
?>
</body>
</html>