<?php

use League\Csv\Reader;

$csv = Reader::createFromPath('address.csv', 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader();
$records = $csv->getRecords();

foreach($records as $record){
	if($record[3] === "Ontario"){
		print_r($record);
	}
}