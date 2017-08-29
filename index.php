<?php

/*function getPrice($cost) {
	//$kaina = $savikaina * 2 * 1.21 + 5;
	return $cost * 2 * 1.21 +5;
}
*/
$plotis=3;
$gylis = 1.5;
function getVolume($a, $b =3, $c = 1.5) {
	return $a *$b * $c;
}
function getTrucks($volume,$t_volume) {
	 $trucks = ceil($volume/$t_volume);
	 return $trucks;
}

function getKaina ($count, $price) {
	$kaina = $count * $price;
	return $kaina;
}
 /*function getArea($x, $y, $z) {
 	$area = round(2 * $x * $z + 2 * $y * $z + $x * $y);
 	return $area;
 }
 */

 /*function getTiles($area, $tiles=0.25) {
 	$plyteles = ceil($area/$tiles);
 	return $plyteles;
 }
 */



?>
<!DOCTYPE html>
<html>
<head>
	<title>9 paskaita(PHP)</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<h1>9 Paskaita (PHP)</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12">
	<table class="table">
	<thead>
    	<tr class="lentele">
      		<th colspan="4" class="background lentele">Baseinai</th>
      		<th colspan="4" class="background lentele">Autocisternu kiekis</th>
    	</tr>
    	<tr>
    		<th>Ilgis</th>
    		<th>Plotis</th>
    		<th>Gylis</th>
    		<th>Turis</th>
    		<th>10m3</th>
    		<th>Kaina</th>
    		<th>30m3</th>
    		<th>Kaina</th>
    	</tr>

    	
  	</thead>
  	<tbody>
  		<?php
  		for ($ilgis=1; $ilgis <= 50 ; $ilgis++) {
  			$kaina10 = getKaina(getTrucks(getVolume($ilgis),10),100);
  			$kaina30 = getKaina(getTrucks(getVolume($ilgis),30),200);

  			$class10 = "";
  			$class30 = "";

  			if ($kaina10 < $kaina30) {
  				$class10 = "table-success";
  			} else {
  				$class30 = "table-success";
  			}
  			echo "<tr><td>$ilgis</td>
  			<td>$plotis</td>
  			<td>$gylis</td>
  			<td>" . getVolume($ilgis) . "</td>
  			<td>" . getTrucks(getVolume($ilgis),10) . "</td>
  			<td class='$class10'>" . getKaina(getTrucks(getVolume($ilgis),10),100) . "</td>
  			<td>" . getTrucks(getVolume($ilgis),30) . "</td>
  			<td class = '$class30'>" . getKaina(getTrucks(getVolume($ilgis),30),200) . "</td></tr>";
  		}
    	?>
   	</tbody>
	</table>
			

		</div>
	</div>
</div>
</body>
</html>