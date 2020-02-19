<!DOCTYPE html>
<html>
<head>

<title>  Hey </title>
<style>
div {
  background-color: lightblue;
  width: 300px;
  border: 15px solid black;
  padding: 50px;
  margin: 20px;
}

main {
  background-color: lightgreen;
  width: 400px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
<body> 
<?php 
echo "<div>";
echo "<h1>";
echo "Challenge : ISBN Validation";
echo "</h1>";
$isbn10 = "0471190470";
$isbn10 = "8711075597";
function get_isbn10()

{
	$isbn10 = "047119042X";
	echo "Checking isbn: ".$isbn10." for validity...........";
	echo "<br>";
	echo "<br>";
	$string = strlen("$isbn10");
	if ( $string != 10)
		
		{
			return FALSE;
		echo "Given ISBN is not 10 digits ".$isbn." ";
		}
       
	   
	   $checkdigit = 11 - ( ( 10 * substr($isbn10,0,1) + 9 * substr($isbn10,1,1) + 8 * substr($isbn10,2,1) + 7 * substr($isbn10,3,1) + 6 * substr($isbn10,4,1) + 5 * substr($isbn10,5,1) + 4 * substr($isbn10,6,1) + 3 * substr($isbn10,7,1) + 2 * substr($isbn10,8,1) ) % 11);

        switch ( $checkdigit ) 
            {
            case 10:
                $checkdigit = "X";
                break;
            case 11:
                $checkdigit = 0;
                break;
            default:
            }
			$last = substr($isbn10,9,1);
			if ($checkdigit == $last)
			{
				
				echo " Valid ISBN!";
			}
			else
		    {
				echo "Invalid ISBN!";
			}
         
}		
     echo get_isbn10();
echo "</div>";	

echo "<main>";
echo "<br>";
echo "<br>";	
echo "<h1>";
echo "Coin Toss!";
echo "</h1>";
function cointoss () {
    return mt_rand(0,1);  // return zero or one
}


for($count1=1; $count1<10; ++$count1)
{
	echo "<br>";
	echo "<b>";
	echo "Flying a coin ".$count1." times.....";
	echo "</b>";
	echo "<br>";
for($count=0; $count<$count1; ++$count)
{
	

	$toss = cointoss();
	echo ($toss ? '<img src="Heads.png" style="width:40px;height:40px"/>' : '<img src="Tails.png" style="width:40px;height:40px"/>') , "\n";
}
++$count1;
}	
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<b>";
	echo "Beginning the coin flipping.....";
	echo "</b>";
	echo "<br>";

$previous_toss = null;
$toss = null;
$count2 = null;
do {
    if ($toss !== null) {  // only store a new "previous_toss" if not the first iteration
        $previous_toss = $toss;  // store last ieration's value
    }
    $toss = cointoss();  // get current iteration's value
   echo ($toss==1 ? '<img src="Heads.png" style="width:40px;height:40px"/>' : '<img src="Tails.png" style="width:40px;height:40px"/>') , "\n";
    //    ^^^^^- if a non-zero/non-falsey value, it is heads, else tails
	++$count2;
} while ($previous_toss + $toss != 2);
//       ^^^^^^^^^^^^^^^^^^^^^^- if 1 + 1 then 2 breaks the loop
echo "<br>";
echo "<b>";
	echo "Flipped two heads in a row, in ".$count2." flips";
	echo "</b>";
	echo "</main>";
?>
</body>
</html>