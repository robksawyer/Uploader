<?php
/**
* Get a key and secret from AWS and fill in this content.
*/
	$amazon = array(
		'Aws' => array(
			'url' => getenv('CC_S3_URL'),
			'key' => getenv('CC_S3_ACCESS_KEY'),
			'secret' => getenv('CC_S3_SECRET_KEY')
		)
	);
	Configure::write('Aws', $amazon);
	$amazon_config_data = Configure::read('Aws');
	define('CC_S3_URL', $amazon_config_data['url']);
	define('CC_S3_ACCESS_KEY', $amazon_config_data['key']);
	define('CC_S3_SECRET_KEY', $amazon_config_data['secret']);
	debug(CC_S3_SECRET_KEY);
?>