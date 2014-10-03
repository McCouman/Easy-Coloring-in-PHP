<?php
/*
*	@Info: 
*	Der einfacher Farbwandler für Arme
*	--------------------------------------
*
*	Das ganze ist recht simpel:
*	GPR in HEX umwandeln und die % der neuen Farbbereiche wählen.
*	Das ganze dient als Idee und kann sicher noch vereinfacht werden. 
*	Easy Coloring halt ;)
*	
*	@developer 	Michael McCouman Jr.
*	@date 		03.10.2014
*	@liz		MIT
*/


	// Hier die Hauptfarbe eintragen, der Rest geht automatisch
	$colordesigner = 'ff0000';

	//% Hier den Wert entsprechend anpassen :P
	$var_mid	= '60';
	$var_dark	= '80';

	// GPR => HEX
	$hex_red 	= substr("$colordesigner", 1, 2); 
	$hex_green 	= substr("$colordesigner", 3, 2); 
	$hex_blue 	= substr("$colordesigner", 5, 2); 

	// Original
	$dec_r 		= hexdec($hex_red); 
	$dec_g 		= hexdec($hex_green); 
	$dec_b 		= hexdec($hex_blue); 
	
	// Mittel
	$mid_r		= $dec_r - $var_mid;
	$mid_g		= $dec_g - $var_mid;
	$mid_b 		= $dec_b - $var_mid;
	
	// Dunkel
	$dark_r		= $dec_r - $var_dark;
	$dark_g		= $dec_g - $var_dark;
	$dark_b 	= $dec_b - $var_dark;

?>
<div style="background: <?php /*original*/ 	echo 'rgb('.$dec_r.','.$dec_g.','.$dec_b.')'  	?>;">Hauptfarbe / Farbe 1</div>
<div style="background: <?php /*midle*/ 	echo 'rgb('.$mid_r.','.$mid_g.','.$mid_b.')' 	?>;">Farbe2 </div>
<div style="background: <?php /*dark*/ 		echo 'rgb('.$dark_r.','.$dark_g.','.$dark_b.')' ?>;">Farbe 3</div>
