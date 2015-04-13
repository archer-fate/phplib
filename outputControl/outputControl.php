<?php
	
	ob_start();		//to use output buffer,first open buf

	echo "hellow";	//if will not just open,till you flush or you output it

	$content = ob_get_contents();		//this is used to get contents from output buffer

	ob_end_clean();			//this is used to clean and close the output buffer

	
	echo $content;
	
	//tips: output buffer contents
		//1. ob_flush()
		//2. ob_end_flush()
		//3. ob_get_contents()

	
?>
