
<?php 

/*  Template Name: API Connect  */
// http://blog.ijasoneverett.com/2013/02/rest-api-a-simple-php-tutorial/

if (isset($_GET["actionpass"]) && ($_GET["actionpass"] == 'traveltripper')) {
	get_sidebar();
} else {
	header('Location:' . get_bloginfo('url'));
	die();
}

?>