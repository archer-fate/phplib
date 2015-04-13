<?php
ob_start();

phpinfo();

//this is used to get output functions output nothing
$info = ob_get_contents();  //so ,you can operate the output by phpinfo

?>
