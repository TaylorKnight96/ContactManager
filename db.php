<?php

		$con = pg_connect("host=localhost port=5432 dbname=Small_Project") or die('connection failed');
		return $con;
?>
