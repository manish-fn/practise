<!DOCTYPE html>
<html>
<body>

<?php
$var1 = 10;
$var2 = 5;
$var = $var1 + $var2;
global $var3;
$text = "script!";
echo "<h4>My first PHP </h4>" . $text ." 	:)" . $var;

function mytext() {
	global $var;
	global $var3;
	$var3 = 21;
	echo $var;
}
mytext();
echo $var3;
?>

</body>
</html>

