<?php
	// load up global things
 require_once $_SERVER['DOCUMENT_ROOT'].'/mates/core/init.php'; 

	// destroy the session (clears all session data)
	session_destroy();

	echo json_encode( 
		array(
			'status' => 'ok',
		)
	);