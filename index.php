<?php
$frets = ['Nut', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI'];
$strings = ['E', 'B', 'G', 'D', 'A', 'E'];
$tempered = ['A', 'A_Bb', 'B', 'C', 'C_Db', 'D', 'D_Eb', 'E', 'F', 'F_Gb', 'G', 'G_Ab'];
$num_string = 6;
$note_pos = 0;

foreach ($strings as $string) {
	$fret_position = 0;
	foreach ($tempered as $note) {
		if ($note == $string) {
			$tuning[] = $fret_position + 1;
		}
	$fret_position++;
	};
}

$tempered = new ArrayIterator($tempered);
$tempered = new InfiniteIterator($tempered);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fretboard</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
  </head>

  <body>

	<h1> Standard Guitar Tuning </h1>

    <table width="60%" border="1px">
		<tr>
			<?php $num_items = count($frets); for($i = 0; $i < $num_items; $i++) {echo "<th>$frets[$i]</th>";}?>
		</tr>
		<?php
		foreach ($tuning as $initial) {
$string_nut = <<< NUT
				<tr class="string$num_string"><td class="nut, $strings[$note_pos]">
NUT;
			echo $string_nut;
			echo str_replace ("_", "#/", $strings[$note_pos]) . "</td>";
			

			foreach (new LimitIterator($tempered, $initial, (count($frets) -1)) as $note) {
$string_rest = <<< REST
				<td class="$note">
REST;
				echo $string_rest;
				echo str_replace ("_", "#/", $note) . "</td>";
			}
			echo '</tr>';
			$num_string--;
			$note_pos++;
		}
		?>
	</table>
  </body>
 