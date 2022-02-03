<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Excercise05a</title>
</head>
<body>

<?php
	function modulus1($val1 = 6, $val2 = 2) {
		$output = $val1 % $val2;
		echo "The modulus of $val1 and $val2 is: $output", "<br />";
	}
	modulus1();
	
	function modulus2($val1, $val2) {
		$output = $val1 % $val2;
		return $output;
	}
	$x=10;
	$y=3;
	echo "The modulus of $x and $y is: ", modulus2($x,$y);
?>

</body>
</html>