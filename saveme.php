<?php

// file_put_contents('tmp/'. $_REQUEST['id'].'.png', base64_decode($_REQUEST['data']));



	// requires php5
	define('UPLOAD_DIR', 'tmp/');
	$img = $_POST['data'];
	$id = $_POST['id'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . $id . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';



?>