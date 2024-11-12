<?php
	$request = strtok($_SERVER['REQUEST_URI'], '?');
	$base_url = '/isc';
	$request = str_replace($base_url, '', $request);
	if ($request == '/' || $request == '') {
	    require 'home.php';
	    exit;
	}
	$file = trim($request, '/') . '.php';
	if (file_exists($file)) {
	    require $file;
	} else {
	    http_response_code(404);
	    echo "404 - File not found.";
	}
?>
