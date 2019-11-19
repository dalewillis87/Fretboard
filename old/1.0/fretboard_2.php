<?php
$notes = ['A', 'A#/Bb', 'B', 'C', 'C#/Db', 'D', 'D#/Eb', 'E', 'F', 'F#/Gb', 'G', 'G#/Ab'];
$tuning = ['E', 'A', 'D', 'G', 'B', 'E'];
$fretLength = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Fretboard</h1>
<table>
<?php
	// Create fret numbers 
	echo "<tr>";
	echo "<th>&nbsp;</th>";

	for ($fret = 1; $fret <= 12; $fret++) :
		echo "<th>$fret</th>";
	endfor;
	echo "</tr>";
	//Create remaining rows
	$stringNumber = count($tuning);
	for ($string = $stringNumber - 1, $fret = 0; $string >= 0; $string--) {
		echo "<tr>";
		//Create Tuning row
		if ($fret == 0) {
			echo "<th>" . $tuning[$string] . "</th>";
		}
		
		//Create fretboard notes
		
		//TODO: loop through notes array
		//TODO: print notes sequentially returning to index 0 if index >=12
		//TODO: identify relevant note sequence
		//TODO: print note sequence relevant to fret position
		while ($fret < 12) {
			//Define String note value
			$stringNote = $tuning[$string];
			//Compare String note value with $notes array if the same then echo
			if ($stringNote == $notes[$fret++]) {
				echo '<td>' . $notes[$fret++] . '</td>';
			} 
		}
		echo "</tr>";
		
		
		//Reset $fret at end of loop.
		$fret = 0;
	}
	?>
</table>
</body>
</html>
