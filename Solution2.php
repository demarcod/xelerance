<?php

$file = fopen('address.csv', 'r');

while (($line = fgetcsv($file)) !== FALSE){

	if(){
		print_r($line);
	}


}

fclose($file);