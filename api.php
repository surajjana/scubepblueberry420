<?php 

	require_once 'includes/api_controller.php';

	// $d = json_encode(array("call"=>"get_slogan"));
	// echo "<br>Request --> $d";
	// echo "<br>Ciphered--> ";
	// echo _api_encrypt($d,get_private_key('key'));
	// echo "<br>Response: <br>";

	if (isset($_REQUEST['data']) && isset($_REQUEST['key'])) {
		$pub_key = $_REQUEST['key'];
		$pri_key = get_private_key($pub_key);
		$jsn_data = _api_decrypt($_REQUEST['data'],$pri_key);
		if (!$jsn_data) {
			echo _api_error("invalid api key");
		}else{
			$dat = json_decode($jsn_data);
			if(!$dat){
				echo _api_error("malformed json data");
			}else{
				if(isset($dat->call)){
					echo _api_decrypt(_api_call($pri_key, $dat->call,array()),$pri_key) ;
				}else{
					echo _api_error("nothing to do. no callback specified");
				}
			}
		}
	}else{
		echo _api_error("malformed API request");
	}



