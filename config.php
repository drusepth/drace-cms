<?php

	# Configuration
		# MySQL Configuration
		$db_username	= 'a7895550_main';
		$db_password	= 'password';
		$db_location	= 'mysql7.000webhost.com';
		$db_name		= 'a7895550_grace';
		$db_prefix		= '';
		
		# Local MySQL Configuration
		$db_username	= 'root';
		$db_password	= 'thm89253';
		$db_location	= 'localhost';
		$db_name		= 'drace';
		$db_prefix		= '';
		
		
		# Site Configuration
		$user_name		= 'drusepth';
		$site_name		= 'Drace';
		$site_slogan	= 'Simply Speaking';
		
		# Blog Configuration
		$front_posts	= 5;
		$summary_length	= 500;
		
	
	
	# Non-configuration code
	define(DB_USERNAME, $db_username);
	define(DB_PASSWORD, $db_password);
	define(DB_LOCATION, $db_location);
	define(DB_NAME, $db_name);
	define(DB_PREFIX, $db_prefix);
	
	define(SI_USER, $user_name);
	define(SI_NAME, $site_name);
	define(SI_SLOGAN, $site_slogan);
	
	define(BL_LIMIT, $front_posts);
	define(BL_WORDS, $summary_length);
	

?>
