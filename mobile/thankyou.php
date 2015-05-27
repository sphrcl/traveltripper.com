<?php 

session_start();

$_SESSION['roompush'] = $push;

include('includes/header.php'); 

$sessionid = substr(str_shuffle(MD5(microtime())), 0, 15);

?>
<!--
BEGIN EDITING HERE
-->

<div class="basecon">
		<!-- BEGIN BLOG POST -->

			<!-- BEGIN IMAGE -->
			<a href="post-standard.html"><img style="max-width: 100%" src="http://images.fineartamerica.com/images-medium-large/1-new-york-city-skyline-at-night-darrell-young.jpg" alt="trooper"></a>
			<!-- END IMAGE -->
			
			<!-- BEGIN POST DATE + AUTHOR 
			<div class="post-meta-author-date">
				<time datetime="2014-01-30">Jan 30th</time>, 
				Bonfire
			</div>
			<!-- END POST DATE + AUTHOR -->
			
			<!-- BEGIN TITLE -->
			<h1 class="post-title">
				<a href="post-standard.html" title="The standard post">
					Thank you!
				</a>
			</h1>
			<!-- END TITLE -->
			
			<!-- BEGIN CONTENT -->
			<div class="entry-content">
				<p>Your reservation has been submitted and an email has been sent.</p>

				
			</div>
			<!-- END CONTENT -->
</div>
			
<?php include('includes/footer.php'); ?>
