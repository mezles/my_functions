<?php

function sanitize_filename( $filename ) {
	$len = strlen($filename);

	$newfile = '';

	for ($ctr = 0; $ctr < $len; $ctr++) :
		switch( $filename[$ctr] ) :
			case ' ':
				$newfile .= '-';
				break;
			case '>':
				$newfile .= 'greater-than';
				break;
			default:
				$newfile .= strtolower( $filename[$ctr] );
				break;
		endswitch;

	endfor;

	return $newfile;
}


$file = 'mE > yOu.jpeG';

echo '<p>Original filename: <strong>' . $file . '</strong></p>';
echo '<p>Sanitized filename: <strong>' . sanitize_filename( $file ) . '</strong></p>';
echo '<hr />';

$file = 'U can\'t beat ME.vid';

echo '<p>Original filename: <strong>' . $file . '</strong></p>';
echo '<p>Sanitized filename: <strong>' . sanitize_filename( $file ) . '</strong></p>';

?>