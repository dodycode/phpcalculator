<?php

$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
$operator = $_POST['operator'];

switch ($operator) {
	case '+':
		$calculate = $bil1 + $bil2;
		break;
	case '-':
		$calculate = $bil1 - $bil2;
		break;
	case '*':
		$calculate = $bil1 * $bil2;
		break;
	case '/':
		$calculate = $bil1 / $bil2;
		break;
	case '%':
		$calculate = $bil1 % $bil2;
		break;
	default:
		$calculate = $bil1 + $bil2;
		break;
}

$hasil = array('hasil' => $calculate);

echo json_encode($hasil);