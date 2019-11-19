<?php 

class Semitones {
	
	public $note_id;
	public $initial;
	public $length;
	
	public $tuning = array(7, 12, 17, 22, 26, 31);
	
	public $tempered = [
	  0 => 'A',
  	  1 => 'A#/Bb',
	  2 => 'B',
	  3 => 'C',
	  4 => 'C#/Db',
	  5 => 'D',
	  6 => 'D#/Eb',
	  7 => 'E',
	  8 => 'F',
	  9 => 'F#/Gb',
	  10 => 'G',
	  11 => 'G#/Ab'
	];
	
	public function dale_sequence() {
		$notes = $this->tempered;
		$tuning = $this->tuning;
		$length = $this->length;
		
		$notes = new ArrayIterator($notes);
		$tuning = new ArrayIterator($tuning);
		
		
		$notes = new InfiniteIterator($notes);
		
		$tuning = iterator_to_array($tuning);
		$tuning = array_reverse($tuning);
		
		foreach ($tuning as $initial) {
			foreach (new LimitIterator($notes, $initial, $length) as $note) {
				echo "<td>" . $note . " </td>";
			}
			echo "<hr>";
		}
		
		//$initial = $this->initial;
		
	}
	
	public function dale_note() {		
		if($this->note_id > 0) {
			return $this->notes[$this->note_id];
		} 
	}
}	

$semi = new Semitones;
$semi->initial = 2;
$semi->length = 12;
echo $semi->dale_sequence();


?>
