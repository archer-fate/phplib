<?php

	//this example show that you can output something before you send some header to browser,no mistakes
	ob_start();

	echo "hellow";

	header("https://github.com/archer-fate/phplib");		

	ob_end_clean();

	
?>
