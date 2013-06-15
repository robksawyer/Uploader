<?php
/**
* Get a key and secret from AWS and fill in this content.
*/
	$amazon = array(
		'Aws' => array(
			'key' => getenv('CC_S3_ACCESS_KEY'),
			'secret' => getenv('CC_S3_SECRET_KEY')
		)
	);
	Configure::write('Aws', $amazon);
?>