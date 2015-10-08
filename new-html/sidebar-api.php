
<?php
	$api_url = 'http://' . $_SERVER['HTTP_HOST'];
	$api_list = file_get_contents( $api_url . '/blog/api-connect/?actionpass=traveltripper'); 
	echo $api_list;
?>