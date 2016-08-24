CREATE TABLE  `posts` (
	`ID` INT( 5 ) NOT NULL ,
	`Title` VARCHAR( 75 ) NOT NULL ,
	`Date` VARCHAR( 30 ) NOT NULL ,
	`Author` VARCHAR( 50 ) NOT NULL ,
	`Topic` VARCHAR( 50 ) NOT NULL ,
	`Epoch` INT( 20 ) NOT NULL ,
	`Content` VARCHAR( 50000 ) NOT NULL
) ENGINE = MYISAM


INSERT INTO  `posts` (
`ID` ,
`Title` ,
`Date` ,
`Author` ,
`Topic` ,
`Epoch` ,
`Content`
)
VALUES (
'1',  'Welcome to your first post!',  'March 28, 2009',  'Andrew Brown',  'Blog Welcoming',  '1238300659', 
'Your installation of Drace CMS was successful!  To begin posting to your blog, visit <a href="admin.php">admin.php</a>.<br /><br />Thanks for installing Drace!'
);

$today = date("F j, Y");
time();

