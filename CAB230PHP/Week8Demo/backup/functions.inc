
<?php

function demoVariables() {

	echo '<br/>';
	//echo "<p> Demo Variables </p>"; 
	$txt = "CAB230 Web Computing";
	echo " <p> I love $txt <p/>";
	//The following code will produce the same output as above:
	echo "<p>I love " . $txt . " more! <p/>";
	
	$x = 6000;
	var_dump($x);
	echo "<br/>";
	
	$y = array(1, 10, 100);
	var_dump($y);
	
	$foo = 'Hello';
	echo "<p> $foo</p>";
	
	$foo = 42;
	echo "<p> $foo</p>";
	
	$foo1 = $foo + '24';

	echo "<p> $foo1</p>";
	
	echo strlen($foo1);
	
		echo "<p>" . strlen($foo1).  "</p>";  
	/*
	$foo1 = $foo + '24 ducks';
	 // add numbers (turn string into num) ! non -well formed
 
	echo $foo1;
	echo strlen($foo1); // rumtime error
	*/
	$foo2 = $foo . "24 ducks"; // concat strings (turn 42 into string)
	echo strlen($foo2);
}

function display_month($month, $year) {
	// code to display plain month and date
	echo '<br/>';
	echo "month = $month, year = $year<br/>"; 
	//demo mktime, get unix timestamp for a date
	// mktime syntax: mktime($hour, $minute, $second, $month, $day, $year)
	$first_day_of_month = mktime(0, 0, 0, $month, 1, $year);

	echo '<br/>';

	echo " \n \r The day's Unix time stamp is: " . $first_day_of_month . ". &nbsp &nbsp This way of showing time is not user friendly!";
	echo '<br/>';
	// To display the timestamp in a user readable form 

	echo " The first day of the " . $month . "&nbsp month of the year &nbsp" . $year . "  is: &nbsp" . date('Y-M-d', $first_day_of_month) . "!";
	echo '<br/>';
	echo " The day is: " . date('Y-M-d H:i:sa', $first_day_of_month) . "!";

}


function show_time() {
	echo " <h2> Demo differnt ways to show time, day, moth, year  </h2>  ";

	echo '<br/>';


	echo '<br/>';
	echo " Today is: " . date('Y/M/d H:i:sa') . "!";

	echo " <br/> The time is: " . date('Y-M-d H:i:sa') . "!"; // H - 24 hour clock
	echo " <br/> The time is: " . date('Y.M.d H:i:sa') .  "!"; // h- 12 hour clock

	echo " <br/> The time is: " . date('H:i:sa d-M-y ') .  "!"; // y - 1 or 2 digit year
	echo " <br/> The time is: " . date(' w H:i:sa d-M-Y ') . "!"; // y - 1 or 2 digit year, w: Day of the week

	echo " <br/> The current time is: " . dayConvert(date('w')). date(' H:i:sa d/M/Y ') . "!"; // y - 1 or 2 digit year, w: Day of the week

}


function dayConvert($day) {

	$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	
	return $days[$day]; // w: Day of the week


}

			
function demoArray() {


	echo " <h2>  demo 	Demo various arrays   </h2>";
	echo " <h3> Indexed arrays - Arrays with a numeric index <br/> </h3>";
	$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	
	echo " One week has " . count($days) . " days.";

	echo " <h3> Associative arrays - Arrays with named keys <br/> </h3>";
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	foreach($age as $key => $val) {
		echo "Key=" . $key . ", Value=" . $val;
		echo "<br>";
	}
	
	echo " <h3> Arrays with with different type element <br/> </h3>";
	$bar = array(42, 3.14, 'Fred', True);
	echo $bar[2];
	echo count($bar);
	
	echo "<p> The bar array includes: </p>" ;
	
	for($i=0; $i < count($bar); $i++){
	
		echo "<p>" . $bar[$i] . "</p>" ;
	}
	
}

?>
