<?php
$frets = ['Nut', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI'];
$strings = ['E', 'A', 'D', 'G', 'B', 'E'];
$tempered = ['A', 'A#/Bb', 'B', 'C', 'C#/Db', 'D', 'D#/Eb', 'E', 'F', 'F#/Gb', 'G', 'G#/Ab'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fretboard</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  
  <body>

    <table width="60%" border="1px">
		<tr>
			<?php $num_items = count($frets); for($i = 0; $i < $num_items; $i++) {echo "<th>$frets[$i]</th>";}?>
		</tr>
		<?php 
			$num_items = count($strings); 
			for ($i = 0; $i <$num_items; $i++) {
				echo '<tr><td class="nut"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
			}
		?>
	</table>

  </body>