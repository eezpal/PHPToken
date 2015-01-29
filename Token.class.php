<?php 
	/**
	* This function helps server to identify CSRF
	*/
	class Token
	{
		public static function generate($key)
		{
			//Generating a random 48 long key
			
			if(!isset($key)){
				$key = 48;	
			}
			
			return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes($key));
		}

		public static function check($token)
		{
			if ($token && $_SESSION['token']===$token) {
				return true;
			}
			return false;
		}
	}
 ?>
