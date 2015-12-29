<?php
	// configuration
	require("includes/config.php");

	// PHPmailer()
	require_once("class.phpmailer.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("offspringForm.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => ""]);
	} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["inhrtType"] == "reg") {
			$dAl = $_POST["dAl"];
			$rAl = $_POST["rAl"];
			$homod = $_POST["homod"];
			$homor = $_POST["homor"];
			$name = $_POST["name"];
			$parents = array($_POST["parent1-1"], $_POST["parent1-2"], $_POST["parent2-1"], $_POST["parent2-2"]);
			$square = [];
			$k = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square[$k] = $parents[$i] . $parents[$j];
						$k++;
					} else {
						$square[$k] = $parents[$i] . $parents[$j];
						$k++;
					}
				}
			}
			$d = 0;
			$r = 0;
			for ($l = 0; $l < 4; $l++) {
				if ($square[$l][0] == $dAl || $square[$l][1] == $dAl) {
					$d++;
				} else {
					$r++;
				}
			}
			$d1 = $d / 4 * 100;
			$r1 = $r / 4 * 100;
			$result = strval($d1) . "% - " . $homod . ", " . strval($r1) . "% - " . $homor;
			query("INSERT INTO history (id, so, type, name, result) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], "Offspring", "Mendelian", $name, $result);
			$email = $name . " has a " . $d1 . "% chance of being " . $homod . " and a " . $r1 . "% chance of being " . $homor . ".";
			if (isset($_POST['emailyn'])) {
				$name1 = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
				$msg = "Hello! " . $name1[0]["name"] . " wanted to let you know that " . $email;
				$msg = wordwrap($msg, 150);
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "tls";
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 587;
				$mail->Username = "cs50genes@gmail.com";
				$mail->Password = "lolnicetry";
				$mail->SetFrom("cs50genes@gmail.com");
				$mail->AddAddress($_POST["email"]);
				$mail->Subject = $name . " Phenotype Probability";
				$mail->Body = $msg;
				if ($mail->Send() === false) {
					render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => "However your email didn't send."]);
				} else {
				render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => "Also, your email was successful!"]);
				}
			} else {
				render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => ""]);
			}
		} else if ($_POST["inhrtType"] == "incmplt") {
			$al1 = $_POST["al1"];
			$al2 = $_POST["al2"];
			$homo1 = $_POST["homo1"];
			$hetero = $_POST["hetero"];
			$homo2 = $_POST["homo2"];
			$name = $_POST["name"];
			$parents = array($_POST["parent1-1"], $_POST["parent1-2"], $_POST["parent2-1"], $_POST["parent2-2"]);
			$square = [];
			$k = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square[$k] = $parents[$i] . $parents[$j];
						$k++;
					} else {
						$square[$k] = $parents[$i] . $parents[$j];
						$k++;
					}
				}
			}
			$h1 = 0;
			$he = 0;
			$h2 = 0;
			for ($l = 0; $l < 4; $l++) {
				if ($square[$l][0] == $al1 && $square[$l][1] == $al1) {
					$h1++;
				} else if ($square[$l][0] == $al2 && $square[$l][1] == $al2) {
					$h2++;
				} else {
					$he++;
				}
			}
			$h1_1 = $h1 / 4 * 100;
			$he_1 = $he / 4 * 100;
			$h2_1 = $h2 / 4 * 100;
			$result = strval($h1_1) . "% - " . $homo1 . ", " . strval($he_1) . "% - " . $hetero . strval($h2_1) . "% - " . $homo2;
			query("INSERT INTO history (id, so, type, name, result) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], "Offspring", "Incomplete", $name, $result);
			$email = $name . " has a " . $h1_1 . "% chance of being " . $homo1 . ", ". $he_1 ."% chance of being " . $hetero . ", and a " . $h2_1 . "% chance of being " . $homo2 . ".";
			if (isset($_POST['emailyn'])) {
				$name1 = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
				$msg = "Hello! " . $name1[0]["name"] . " wanted to let you know that " . $email;
				$msg = wordwrap($msg, 150);
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "tls";
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 587;
				$mail->Username = "cs50genes@gmail.com";
				$mail->Password = "lolnicetry";
				$mail->SetFrom("cs50genes@gmail.com");
				$mail->AddAddress($_POST["email"]);
				$mail->Subject = $name . " Phenotype Probability";
				$mail->Body = $msg;
				if ($mail->Send() === false) {
					render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => "However your email didn't send."]);
				} else {
				render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => "Also, your email was successful!"]);
				}
			} else {
				render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => ""]);
			}
		} else if ($_POST["inhrtType"] == "co") {
			$al1 = $_POST["coAl1"];
			$al2 = $_POST["coAl2"];
			$rAl = $_POST["recAl"];
			$homo1 = $_POST["coHomo1"];
			$hetero = $_POST["coHetero"];
			$homo2 = $_POST["coHomo2"];
			$homor = $_POST["coHomor"];
			$name = $_POST["name"];
			$parents = array($_POST["parent1-1"], $_POST["parent1-2"], $_POST["parent2-1"], $_POST["parent2-2"]);
			$square = [];
			$k = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square[$k] = $parents[$i] . $parents[$j];
						$k++;
					} else {
						$square[$k] = $parents[$i] . $parents[$j];
						$k++;
					}
				}
			}
			$h1 = 0;
			$he = 0;
			$h2 = 0;
			$r = 0;
			for ($l = 0; $l < 4; $l++) {
				if (($square[$l][0] == $al1 && $square[$l][1] == $al1) || (($square[$l][0] == $al1 && $square[$l][1] == $rAl) || ($square[$l][0] == $rAl && $square[$l][1] == $al1))) {
					$h1++;
				} else if (($square[$l][0] == $al2 && $square[$l][1] == $al2) || (($square[$l][0] == $al2 && $square[$l][1] == $rAl) || ($square[$l][0] == $rAl && $square[$l][1] == $al2))) {
					$h2++;
				} else if ($square[$l][0] == $rAl && $square[$l][1] == $rAl) {
					$r++;
				} else {
					$he++;
				}
			}
			$h1_1 = $h1 / 4 * 100;
			$he_1 = $he / 4 * 100;
			$h2_1 = $h2 / 4 * 100;
			$r_1 = $r / 4 * 100;
			$result = strval($h1_1) . "% - " . $homo1 . ", " . strval($he_1) . "% - " . $hetero . strval($h2_1) . "% - " . $homo2. ", " . strval($r_1) . "% - " . $homor;
			query("INSERT INTO history (id, so, type, name, result) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], "Offspring", "Codominance", $name, $result);
			$email = $name . " has a " . $h1_1 . "% chance of being " . $homo1 . ", ". $he_1 ."% chance of being " . $hetero . ", " . $h2_1 . "% chance of being " . $homo2 . ", and a " . $r_1 . "% chance of being " . $homor . ".";
			if (isset($_POST['emailyn'])) {
				$name1 = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
				$msg = "Hello! " . $name1[0]["name"] . " wanted to let you know that " . $email;
				$msg = wordwrap($msg, 150);
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "tls";
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 587;
				$mail->Username = "cs50genes@gmail.com";
				$mail->Password = "lolnicetry";
				$mail->SetFrom("cs50genes@gmail.com");
				$mail->AddAddress($_POST["email"]);
				$mail->Subject = $name . " Phenotype Probability";
				$mail->Body = $msg;
				if ($mail->Send() === false) {
					render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => "However your email didn't send."]);
				} else {
				render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => "Also, your email was successful!"]);
				}
			} else {
				render("offspringResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "active", "spouseActive" => "", "historyActive" => "", "comb" => $square[0], "comb1" => $square[1], "comb2" => $square[2], "comb3" => $square[3], "result" => $email, "email" => ""]);
			}
		}
	}
?>
