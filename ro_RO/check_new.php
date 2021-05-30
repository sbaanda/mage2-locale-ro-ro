<?php

$ro_csv = fopen('ro_RO.csv', 'r');
$phrases_csv = fopen('phrases.csv', 'r');
$ro_new_csv = fopen('ro_RO_new.csv', 'w');

$old = array();

while (($data = fgetcsv($ro_csv)) !== false) {
	$key = $data[0];
	$old[$key] = true;
}

while (($data = fgetcsv($phrases_csv)) !== false) {
	$key = $data[0];
	if (array_key_exists($key, $old)) {
		continue;
	}
	$data[1] = '';
	fputcsv($ro_new_csv, $data);
}

fclose($ro_csv);
fclose($phrases_csv);
fclose($ro_new_csv);
