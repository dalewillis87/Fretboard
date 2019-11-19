<?php 

class Semitones {
	
	public $note_id;
	public $initial;
	public $length;
	
	public $notes = [
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
	
	public function dale_semi_sequence() {
		$notes = $this->notes;
		$length = $this->length;
		
		$notes = new ArrayIterator($notes);
		
		
		$notes = new InfiniteIterator($notes);
		if ($length) {
			$initial = $this->initial;
			$notes = new LimitIterator($notes, $initial, $length);
				foreach ($notes as $note) {
					echo $note . " ";
			}
		} else {
			echo "length not set";
		}		
	}
}	

$semi = new Semitones;
$semi->initial = 6;
$semi->length = 10;
echo $semi->dale_semi_sequence();

?>
