<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;

<?php
$name = "Gabriel Magbanua";
$year = date("09/17/01");
?>


?>
Something is wrong with the XAMPP installation :-(
