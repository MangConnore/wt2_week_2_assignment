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
