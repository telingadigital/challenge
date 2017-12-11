<?php

function solution($A, $B, $C, $D, $E, $F)
{
	$collection = [$A,$B,$C,$D,$E,$F];
	sort($collection);

	$time[5] = $collection[5];
	unset($collection[5]);

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

	$collection = array_values($collection);

	$time[3] = $collection[3];
	unset($collection[3]);

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

	$collection = array_values($collection);

	$time[1] = $collection[1];
	unset($collection[1]);

	$time[0] = $collection[0];
	unset($collection[0]);

	if ($time[1] + 10 * $time[0] > 23) {
		echo 'Not Possible';
		exit();
	}

	echo $time[0].$time[1].":".$time[2].$time[3].":".$time[4].$time[5];
}

// solution(1,8,3,2,6,4); // test 1
// solution(0,0,0,0,0,0); // test 2
// solution(2,4,5,9,5,9); // test 3
// solution(0,0,0,7,8,9); // test 4