<?php

function Fibonacci($value){

	$total = 0;

	$first = 0;
	$second = 1;
	$temp;

	if($value >= $first){
		echo $first . ", ";
	}

	if($value >= $second){
		echo $second . ", ";
		$total += $second;
	}

	while(($first + $second) <= $value){

		echo $first + $second . ", ";

		$temp = $first;
		$first = $second;
		$second = $temp + $second;

		if($second % 2 != 0){
			$total += $second;
		}
	}

	echo "Sum of odd-values: " . $total;
}