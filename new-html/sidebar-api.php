
<?php
	$api_list = file_get_contents('http://localhost/traveltripper.com/blog/api-connect/?actionpass=traveltripper'); 
	echo $api_list;
?>