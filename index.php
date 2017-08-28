<?php

/*function getPrice($cost) {
	//$kaina = $savikaina * 2 * 1.21 + 5;
	return $cost * 2 * 1.21 +5;
}
*/
function getVolume($ilgis, $plotis, $aukstis) {
	$Volume = round($ilgis * $plotis * $aukstis);
	return $Volume;
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
      <th colspan="2" class="background lentele">Autocisternu kiekis</th>
    </tr>
  </thead>
  <tbody>
    <tr class="background lentele">
      <td class="lentele">Ilgis (m.)</td>
      <td class="lentele">Plotis (m.)</td>
      <td class="lentele">Gylis (m.)</td>
      <td class="lentele">Turis (m.)</td>
      <td class="lentele">10 m3</td>
      <td class="lentele">30 m3</td>
    </tr>
   </tbody>
</table>



		
			<?php

				/*if (1 == 1) {
					echo "Taip";
				} else {
					echo "NE";
				}*/
				/*$i = 0;
				while ($i <10) {
					echo "<div class = 'tile' id='$i'>$i</div>";
					$i++;
				}*/
				/*for ($i=0; $i < 500; $i++) { 
					echo "<div class = 'tile' id='$i'>$i</div>";
				}*/
				//echo "Prekes pardavimo kaina yra " . getPrice(50) . "EUR.<br>";
				//echo "Baseino turis yra " .getVolume(30,30,50.333333) . " m3.<br>";
				//echo "Baseino vidaus turiui apkloti reikia : " . getArea(100,100,100) . " m2.<br>";
				//echo "Plyteliu reikia : " . getTiles(1.1) . " vienetai";
			?>
			
		</div>
		
	</div>
</div>
</body>
</html>