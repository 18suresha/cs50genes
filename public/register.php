<?php
	// configuration
	require("includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("register_form.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "", "historyActive" => ""]);
	} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["username"]) || empty($_POST["password"])) {
			apologize("The username and/or password field is blank!");
		} else if ($_POST["password"] != $_POST["confirmation"]) {
			apologize("The password fields don't match!");
		} else {
			$check = query("INSERT INTO users (username, hash, name) VALUES(?, ?, ?)", $_POST["username"], crypt($_POST["password"]), $_POST["name"]);
			if ($check === false) {
				apologize("The registration failed! Reasons include an already-used username.");
			} else {
				$userInfo = query("SELECT LAST_INSERT_ID() AS id");
				$id = $userInfo[0]["id"];
				$_SESSION["id"] = $id;
				redirect("/");
			}
		}
	}
?>

