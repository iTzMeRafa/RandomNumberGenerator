<html>
<head>
	<title> Random Number Generator </title>
</head>
<body>
	<style>
		body {
			background-color: black;
			background-image: url("bg.png");
			background-size: cover;
			color: white;
			position: fixed;
  			top: 50%;
  			left: 50%;
		    margin-top: -200px;
		    margin-left: -200px;
		}

		p  {
			font-size: 1.5em;
		}

		h1 {
			margin: 0;
			text-align: center;
		}

		input[type=text] {
			padding: 12px 20px;
			margin: 8px 0;
			font-size: 15px;
		}

		.result {
			margin: 50px auto;
			text-align: center;
			text-shadow: -1px -1px 0px rgba(255,255,255,0.3), 1px 1px 0px rgba(0,0,0,0.8);
			color: #FFF;
			font: 700 80px 'Bitter';
		}

		input[type=submit] {
			color: white;
		    font-size: 20px;
		    font-family: helvetica;
		    text-decoration: none;
		    border: 2px solid white;
		    border-radius: 20px;
		    transition-duration: .2s;
		    -webkit-transition-duration: .2s;
		    -moz-transition-duration: .2s;
		    background-color: black;
		    padding: 4px 30px;
		}

		input[type=submit]:hover {
			color: black;
			background-color: white;
			transition-duration: .2s;
			-webkit-transition-duration: .2s;
			-moz-transition-duration: .2s;
		}
	</style>

<h1> Random Number Generator </h1> 

<form action="index.php" method="GET">

<table width="100%">
	<tr>
		<td> <p> Minimum: </p> </td>
		<td> <input type="text" name="min" maxlength="20" value="<?php echo isset($_GET['min']) ? $_GET['min'] : '' ?>" /> </td>

	</tr>
	<tr>
		<td> <p> Maximum: </p> </td>
		<td> <input type="text" name="max" maxlength="20" value="<?php echo isset($_GET['max']) ? $_GET['max'] : '' ?>" /> </td>
	</tr>
</table>

<br />
<input type="submit" name="submit">

</form>



<?php
if (isset($_GET['submit'])) {

	if (empty($_GET['min']) && empty($_GET['max'])) { 
		echo "<br /> <br /> <img src='error.png' width='30xpx'> <strong> please enter some values to generate with. </strong> ";

	} else if (!is_numeric($_GET['min']) || !is_numeric($_GET['max'])) {
	  	echo "<br /> <br /> <img src='error.png' width='30xpx'> <strong> only numbers are allowed. </strong>";
	}

	else if (!empty($_GET['min']) && !empty($_GET['max'])) {

		$min = $_GET['min'];
		$max = $_GET['max'];
		$random = rand($min, $max);

		echo "<h1> <br /> <br /> <div class='result'>" . $random . "</div></h1>";
	}
}
?>

</body>
</html>

