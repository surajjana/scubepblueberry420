<?php 

	$file = array_pop(explode("/", $_SERVER['PHP_SELF']));
	if ($file != "index.php") {
		header("Location: index.php?page=settings");
		exit;
	}

	$username = "";
	$query = "SELECT * FROM `".DB_CONFIG."`";
	$ret = $db_obj->query($query);
	if ($ret) {
		$result_set = $db_obj->fetchrowset();
		foreach ($result_set as $_value) {
			if ($_value['config_id'] == "admin_info") {
				$username = json_decode($_value['config_value'])->username;
			}
		}
	}

?>
	<style type="text/css">
		input[type="text"]{
			width: 50%;
		}
	</style>

	<div class="span9">
		<form>
			<label for="username">UserName:</label>
			<input type="text" name="username" value="<?php echo $username;  ?>" />
		</form>
	</div>
