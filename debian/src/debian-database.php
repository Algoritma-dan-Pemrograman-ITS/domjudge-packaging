<?php

	$credfile = ETCDIR . '/judgedaemon.dbconfig.php';
	if (!include($credfile)) {
		user_error("Cannot read database credentials file " . $credfile,
			E_USER_ERROR);
	}

	global $DB;

	if ($DB) {
		user_error("There already is a database-connection",
			E_USER_ERROR);
	}

	$DB = new db ($dbname, $dbserver, $dbuser, $dbpass);

