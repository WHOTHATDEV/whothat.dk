<?php
	// We're done! Save the cached content to a file
	$fp = fopen($cachefile, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);

	// finally send browser output
	ob_end_flush();
?>
