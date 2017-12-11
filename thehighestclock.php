<?php

function solution($A, $B, $C, $D, $E, $F)
{
	$collection = [$A,$B,$C,$D,$E,$F];
	sort($collection);
	
	for ($i=5; $i != -1 ; $i--) {
		if ($i == 4) {
			$temp = $collection;
			while(max($temp) >= 6)
			{
				array_pop($temp);
			}

		 	if (empty($temp)) {
		 		echo "Not Possible";
		 		exit();
		 	} else {
		 		$time[4] = max($temp);
		 		arsort($temp);
		 		unset($collection[key($temp)]);
		 	}
		} elseif ($i == 2) {
			$temp = $collection;
			while(max($temp) >= 6)
			{
				array_pop($temp);
			}

		 	if (empty($temp)) {
		 		echo "Not Possible";
		 		exit();
		 	} else {
		 		$time[2] = max($temp);
		 		arsort($temp);
		 		unset($collection[key($temp)]);
		 	}
		} else {
			$time[$i] = $collection[$i];
			unset($collection[$i]);
		}
	}

	if ($time[1] + 10 * $time[0] > 23) {
		echo 'Not Possible';
		exit();
	}

	echo $time[0].$time[1].":".$time[2].$time[3].":".$time[4].$time[5];
}

solution(1,8,3,2,6,4);