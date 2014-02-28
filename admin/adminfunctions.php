<?php 
	
	function is_admin(){
		session_start();
		if (isset($_SESSION['user']['type'])) {
			if($_SESSION['user']['type'] == 'admin'){
				return true;
			}			
		}
		return false;
	}

	function admin_login(){
		global $db_obj;
		session_start();
		if (is_admin()) {
			return false; // Already logged in as admin you fucker !
		}else if(is_loggedin()){
			return false; // go fuck yourself!
		}else{
			$_SESSION['user']['type'] = 'admin'; // goody-good !
			return true;
		}
	}

?>