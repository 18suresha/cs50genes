<?php

    	// configuration
    	require("includes/config.php"); 

	$name = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
	// $rows = query("SELECT symbol, shares FROM portfolio WHERE id = ?", $_SESSION["id"]);
	/*$portfolio = [];
	foreach ($rows as $row) {
		$stock = lookup($row["symbol"]);
		if ($stock !== false) {
			$portfolio[] = [	
				"name" => $stock["name"],
				"price" => $stock["price"],
				"shares" => $row["shares"],
				"symbol" => $row["symbol"]
			];
		}
	}*/

    	// render portfolio
    	render("family.php", ["indexActive" => "active", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "", "historyActive" => "", "name" => $name[0]["name"]]);

?>
