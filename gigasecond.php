<?php

	function from($date) {
		date_add($date, date_interval_create_from_date_string('1000000000 seconds'));
		return $date;
	}

?>