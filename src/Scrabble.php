<?php
	 class Scrabble
		{
		private $word;

				function __construct($word)
				{
					$this->word = $word;
				}

			 	function getWord()
				{
				return $this->word;
				}

				function wordCount()
				{
					$ones = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
					$twos = array('D', 'G');
					$threes = array('B', 'C', 'M', 'P');
					$fours = array('F', 'H', 'V', 'W', 'Y');
					$fives = array('K');
					$eights = array('J', 'X');
					$tens = array('Q', 'Z');

					$upper_word = strtoupper($this->word);
					$str_array = str_split($upper_word);
					$value = 0;

					foreach($str_array as $letter) {
						if(in_array($letter, $ones)) {
							 $value += 1;
						} elseif(in_array($letter, $twos)) {
							 $value += 2;
						} elseif(in_array($letter, $threes)){
							$value += 3;
						} elseif(in_array($letter, $fours)){
							$value += 4;
						} elseif(in_array($letter, $fives)) {
							$value += 5;
						} elseif(in_array($letter, $eights)) {
							$value += 8;
						} elseif(in_array($letter, $tens)) {
							$value += 10;
						}
					} return $value;


				// $wordLetters = str_split($this->word);
				// $score = 0;
				// foreach($wordLetters as $letter)
				// 	{
				// 		if ($letter == )
				// 	}
				}



		}
 ?>
