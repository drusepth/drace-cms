 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 

	<?php
		require_once("config.php");
	
		$mysql = mysql_connect(DB_LOCATION, DB_USERNAME, DB_PASSWORD) 
			or die('The Drace servers are temporarily down.');
		mysql_select_db(DB_PREFIX . DB_NAME, $mysql);
		
		
	?>

	<title><?php echo SI_NAME; ?></title> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	
	<link rel="stylesheet" type="text/css" href="themes/dream.css" /> 
	
	<script type="text/javascript" src="lib/mootools.js"></script> 
	<script type="text/javascript" src="lib/slide.js"></script> 
	
</head> 
<body> 

<div id="header">

	<h1><?php echo SI_NAME; ?></h1>
	<h4><?php echo SI_SLOGAN; ?></h4>
	
	<ul id="menu">
	
		<li><a href="index.php">Home</a></li>
		<li><a href="services.php">Services</a></li>
		<li><a href="login.php">Sign In</a></li>
		<li><a href="register.php">Sign Up</a></li>
		
		
	</ul>

</div>
<?php
	$query = "SELECT * FROM  `posts` LIMIT " . BL_LIMIT;
	$result = mysql_query($query) or die("There was an error.  More specifically, error code 0x01.  We tried using query: $query");
	
	while ($row = mysql_fetch_object($result)) {
?>

<div class="post">

	<h5><?php echo $row->Date; ?></h5>
	<h2><?php echo $row->Title; ?></h2>
	
	<p>
		<?php
			echo $row->Content;
		?>
	</p>

	<h5><a href="read/<?php echo $row->ID; ?>">Read more...</a></h5>
	<h3>Posted by <a href="#"><?php echo $row->Author; ?></a> under <a href="#"><?php echo $row->Topic; ?></a>.</h3>
	
</div>
<?php
	}
?>

</body>
</html>