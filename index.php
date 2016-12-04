<html>
    <head>
        <title>PHP Testing Ground</title>
    </head>
    <body>
        <?php
        	//arrays
        	$people = array("Ryan", "Carbon", "Tyler");
        	foreach ($people as $a) {
        		echo $a . "<br>";
        	}
        	echo print_r($people);
        	echo "<br>";

        	//print dates
        	date_default_timezone_set("UTC");
        	echo date('h:i:s a');
        	echo "<br><br>";

        	//calculate percent difference
        	$a = 1004;
        	$b = 1001000;
        	echo round((abs($a-$b)/$a) * 100) . '%' . "<br><br>"; 

        	//switch statement
        	$m = 10;
        	switch($m) {
        		case 1:
        			echo "is 1";
        			break;
        		case 2:
        			echo "is 2";
        			break;
        		default:
        			echo "is not 1 or 2";
        			break;
        	}
        	echo "<br><br>";

        	//while loop
        	$num = 100;
        	while ($num >= 0) {
        		echo $num-- . "<br>";
        	}
        	echo "<br>";

        	//for loop
        	for ($b = 0; $b <= 10; $b++) {
        		echo $b . "<br>";
        	}
        	echo "<br>";

        	//foreach loop
        	$myarray = array("me", "you", "aight");
        	foreach ($myarray as $b) {
        		echo $b . "<br>";
        	}
        	echo "<br>";

        	//OR you can do key pairs

        	$mykeyarray = array('Name'=>"Michael", 'Street'=>"Steven Dr");
        	foreach ($mykeyarray as $key => $value) {
        		echo $key . " : " . $value . "<br>";
        	}
        	echo $mykeyarray['Street'];
        	echo "<br>";

        	//PHP's version of .format()
        	$fString = "This is the variable \"fString\".";
        	echo "I am reading from this variable: $fString" ;
        	echo "<br>";
        	printf("I am also reading from such a variable. For example, this: %s", $fString);
        	echo "<br><br>";

        	//datatypes
        	$int = 1714124;
        	$float = 17.171717;
        	printf("double number is equal to: %.2f", $float); //the %.2f says to only print two decimals
        	echo "<br>";
        	printf("or can print in binary: %b", $int);
        	echo "<br>";
        	printf("or can print to hexadecimal: %x", $int);
        	echo "<br>";
        	echo "<br>";

        	//string munipulation
        	$myString = "This is the string I am munipulating, Leslie";
        	echo strtoupper($myString);
        	echo "<br>";
        	echo strtolower($myString);
        	echo "<br>";
        	echo ucfirst($myString); //first letter of string capitalized
        	echo "<br>";
        	echo ucwords($myString); //camel case
        	echo "<br>";
        	$splitarray = explode(' ', $myString); //same thing as ' '.split() in Python
        	print_r($splitarray);
        	echo "<br>";
        	$array2string = implode(' ', $splitarray); //converts array to string
        	echo $array2string;
        	echo "<br>";
        	echo substr($myString, 1, 3); //get substring of string
        	echo "<br>";
        	echo strcmp($myString, $myString); //compare the string
        	echo "<br>";
        	$otherString = "yeet";
        	echo strcmp($otherString, $myString);
        	echo "<br>";
        	echo strcasecmp($otherString, $myString); //compares case too
        	echo "<br>";
        	echo strstr($myString, "the string"); //prints out every string after "the string" ignore case is stristr
        	echo "<br>";
        	echo strpos($myString, "the string"); //gets position of a match
        	echo "<br><br>";

        	//functions
        	function addNums($n1, $n2) {
        		return $n1 + $n2;
        	}
        	echo addNums(10, 7);

        ?>
    </body>
</html>