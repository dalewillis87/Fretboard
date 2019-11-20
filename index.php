<?php
$frets = ['Nut', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI'];
$strings = ['E', 'B', 'G', 'D', 'A', 'E'];
$tempered = ['A', 'A#/Bb', 'B', 'C', 'C#/Db', 'D', 'D#/Eb', 'E', 'F', 'F#/Gb', 'G', 'G#/Ab'];
$num_string = 6;

foreach ($strings as $string) {
	$j = 0;
	$e = 0;
	foreach ($tempered as $note) {
		if ($note == $string) {
			$tuning[] = $e + 1;
		}
	$e++;
	}
	$j++;
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
		$i = 0;

		foreach ($tuning as $initial) {
$string_nut = <<< NUT
				<tr class="string$num_string"><td class="nut, $strings[$i]">$strings[$i]</td>
NUT;
			echo $string_nut;

			foreach (new LimitIterator($tempered, $initial, (count($frets) -1)) as $note) {
$string_rest = <<< REST
				<td class="$note">$note</td>
REST;
				echo $string_rest;
			}
			echo '</tr>';
			$num_string--;
			$i++;
		}
		?>
	</table>
  </body>
