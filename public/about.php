<?php
	// configuration
	require("includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("about.php", ["indexActive" => "", "aboutActive" => "active", "offspringActive" => "", "spouseActive" => "", "historyActive" => ""]);
	}

?>
