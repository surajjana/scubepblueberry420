<?php 
	
	$ret = $db_obj->query("SELECT * FROM `video_urls`");
	print_r($db_obj->fetchrowset());
	
?>