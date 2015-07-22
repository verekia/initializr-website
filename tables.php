<?php

//This script will create a table that has 2 row and 4 cells.
//Edit the integer after $end/ as well as $y < # to specify row maximum

$end=7;  //will get all this data from a dabase
$rows=ceil($end/4);
$x=0;
$start=0;
?>
<table>
<?php
while($x<=$rows) {
  echo "<tr>";
  for ($y = 0; $y < 4; $y++, $start++) {
    if ($start <= $end) echo "<td>$start</td>";
  }
  echo "</tr>";
  $x++;
}
?>
</table>

