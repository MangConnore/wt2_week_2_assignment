<h1>Sample</h1>

<?php

$message = "Hello World";


echo $message;

?>

<hr>

<?php
$a = 1;
$b = 3;

echo $a + $b;
?>
<hr>
<hr>

<?php
$a = 6;
#$b = 3;

echo $a + $b;
?>
<hr>

<hr>
<?php
function add($val1, $val2)
{
  return $val1 + $val2;
}

echo add(10, 12);
echo "-";
echo add(10, 10);
echo "-";

function sub($val1, $val2)
{

  return $val1 - $val2;
}

echo sub(20, 10);

?>
<hr>

<?php

function convert_f($farenheit)
{
  return ($farenheit - 32) * 5 / 9;
}

echo convert_f(20);

function convert_c($celsius)
{

  return ($celsius * 9 / 5) + 32;
}
echo "<br>";
echo convert_c(-6.6666666666667);
?>

<hr>

<?php
$server = "localhost";
$username = "root";
$password = " ";

