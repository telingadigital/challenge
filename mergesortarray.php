<?php

function merge(array $a, array $b){
	$c = [];
	$totalA = count($a);
	$totalB = count($b);
	while($totalA || $totalB){
		if(!empty($a) && !empty($b)){
			if($a[0] < $b[0]){
				$c[] = array_shift($a);
				$totalA--;
			} else {
				$c[] = array_shift($b);
				$totalB--;
			}
		} elseif (!empty($a)){
			$c[] = array_shift($a);
			$totalA--;
		} elseif(!empty($b)) {
			$c[] = array_shift($b);
			$totalB--;
		}
	}
	print_r($c);
}
$a = [1,2,3];
$b = [4,5,6];
merge($a,$b);