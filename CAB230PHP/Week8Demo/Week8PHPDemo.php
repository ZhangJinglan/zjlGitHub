<html>
	<head>
		<title> Week8  demo </title> 

	</head>

	<body>

		<h1>Hello World! </h1>
		<h2> Week8 Demo </h2>

		<hr/>
		<h2>March 2016</h2>
			
		<br/>
		<table border="solid">

				<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr> 
				<tr><td colspan="4">&nbsp; </td><td>1</td><td>2</td><td>3</td></tr> 

					<tr><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr> 
				<tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td></tr> 
				<tr><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td></tr> 
				<tr><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td></tr>
				

		</table> 


		<?php
			
			
			/* the following code shows what will happen when you try to show PHP code as plain text
			 instead of executing the code, it shows the source code of the PHP file
			 */
			// include "test.inc";   // uncomment this line to demo error
			
			include "functions.inc";
			

			echo "<hr/>";
			echo "<h2> Demo Variables </h2>";
			demoVariables();
			
			echo "<hr/>";
			echo "<h2> Demo functions </h2>";
			display_month(4,2017);

			echo "<hr/>";
			show_time();
			
	
			echo "<hr/>";
			echo '<br/>';
			demoArray();
			
			echo "<hr/>";
			echo '<br/>';
			echo "<h3> Demo: key words and function names are case insensitive </h3>";
			ECHO "HELLO WOrld!";
			echo " &nbsp HELLO WOrld!";
			showCaseSensitivity();
			
			echo "<h3> Demo Switch </h3>";
			echo "<hr/>";
			echo '<br/>';
			demoSwitch('red');

			echo "<h3> Demo variable Scope </h3>";
			echo "<hr/>";
			echo '<br/>';
			showScope();
			/*	
			echo "<hr/>";
			echo '<br/>';
			demoLoop();
			*/
			echo "<h3> Demo Pass by Value or by Reference </h3>";
			echo "<hr/>";
			echo '<br/>';
			demoPassbyValueReference();
		
			echo "<h3> Demo multi Array </h3>";
			echo "<hr/>";
			echo '<br/>';					
			demoMultiArray();
		/**/	
	
			echo "<hr/>";
			echo '<br/>';
			echo "<h3> Demo Server information using super global </h3>";
			serverInfo();
			

			/*
			echo "<hr/>";
			echo '<br/>';
			echo "<h3> Demo Environment information using super global </h3>";
			showEnv();			

			
			echo "<h3> Demo '$_FILES' </h3>";
			showFiles();
						*/
			
		?>
		<hr/>

	</body>
</html>

