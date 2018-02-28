<?php 
	
	define ('SITE_ROOT', realpath(dirname(__FILE__)));
	class Config {
		public function connection(){
			$host = 'localhost';
			$db_user = 'root';
			$db_pass = '';
			$db_name = 'imdb';
			$db = new mysqli($host, $db_user, $db_pass, $db_name);
			if($db->connect_error) {
					die('Could Not Connect: ' . $db->connect_error);
			}	
			return $db;
		}
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
