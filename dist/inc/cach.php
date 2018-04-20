<?php
	// define the path and name of cached file
	$cachefile = 'cached-files/'.date('M-d-Y').'.php';

	// define how long we want to keep the file in seconds. I set mine to 5 hours.
	$cachetime = 18000;

	// Check if the cached file is still fresh. If it is, serve it up and exit.
	if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
   	include($cachefile);
    	exit;
	}

	// if there is either no file OR the file to too old, render the page and capture the HTML.
	ob_start();
?>
