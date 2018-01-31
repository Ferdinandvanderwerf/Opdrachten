<?php
	function checkNumber($num){
		$counter = strlen($num);
		$sum = 0;
		$arr = str_split($num);
		array_reverse($arr);

		for($i=0;$i<17;$i++){
			$temp = intval($arr[$i]);
			$sum += $temp * $counter;
			$counter--;
		}
		echo "<br>";
		echo $sum . "<br>";

		$tempSum = $sum % 17;

		return $tempSum == 0;
	}

	$answer =checkNumber('92651109849427955');
	echo $answer ? 'Dit is een correct nummer' : 'Dit is geen geldig nummer';
?>
