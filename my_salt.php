<?php

function salt( $from, $to ) {
	$salt = '';
	
	for ( $no = ord($from); $no <= ord($to); $no++ ) {
		$salt .= chr($no);
	}
	
	return $salt;
}

function genrandom( $len, $salt = null ) {
	if ( empty($salt) ) {
		$salt = salt('a', 'z') . salt('A', 'Z') . salt('0', '9');
	}
	
	$str = '';
	
	for ( $no = 0; $no < $len; $no++ ) {
		$index = rand(0, strlen($salt) - 1);
		$str .= $salt[$index];
	}
	
	return $str;
}



echo genrandom(40);
echo '<hr>';
echo genrandom(29, salt('0', '9'));
echo '<hr>';
echo genrandom(40, salt('a', 'z') . salt('A', 'Z') . salt('0', '9') . '`~!@#$%^&*()_-+*/|');