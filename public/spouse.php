<?php
	// configuration
	require("includes/config.php");

	// PHPmailer()
	require_once("class.phpmailer.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("spouseForm.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => ""]);
	} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["inhrtType"] == "reg") {
			$name = $_POST["name"];
			$dAl = $_POST["dAl"];
			$rAl = $_POST["rAl"];
			$p1 = $_POST["parent-1"];
			$p2 = $_POST["parent-2"];
			$c1 = $_POST["child-1"];
			$c2 = $_POST["child-2"];
			$alc = $dAl . $dAl;
			$alc1 = $dAl . $rAl;
			$alc2 = $rAl . $rAl;
			$parents = array($p1, $p2, $alc[0], $alc[1]);
			$square = [];
			$k = 0;
			$result = [];
			$r = 0;
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
			for ($i = 0; $i < 4; $i++) {
				if ($square[$i] == $c1 . $c2 || $square[$i] == $c2 . $c1) {
					$result[$r] = $alc;
					$r++;
					break;
				}
			}
			$parents1 = array($p1, $p2, $alc1[0], $alc1[1]);
			$square1 = [];
			$k1 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square1[$k1] = $parents1[$i] . $parents1[$j];
						$k1++;
					} else {
						$square1[$k1] = $parents1[$i] . $parents1[$j];
						$k1++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square1[$i] == $c1 . $c2 || $square1[$i] == $c2 . $c1) {
					$result[$r] = $alc1;
					$r++;
					break;
				}
			}
			$parents2 = array($p1, $p2, $alc2[0], $alc2[1]);
			$square2 = [];
			$k2 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square2[$k2] = $parents2[$i] . $parents2[$j];
						$k2++;
					} else {
						$square2[$k2] = $parents2[$i] . $parents2[$j];
						$k2++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square2[$i] == $c1 . $c2 || $square2[$i] == $c2 . $c1) {
					$result[$r] = $alc2;
					$r++;
					break;
				}
			}
			$check = count($result);
			$res;
			$res1;
			if ($check == 0) {
				$res = "...There's a mistake in your alleles, this parent-offspring combination isn't possible.";
				$res1 = "N/A";
			}
			else if ($check == 1) {
				$res = "only " . $result[0] . ".";
				$res1 = $result[0];
			}
			else if ($check == 2) {
				$res = $result[0] . " or " . $result[1] . ".";
				$res1 = $result[0] . ", " . $result[1];
			}
			else if ($check == 3) {
				$res = $result[0] . ", " . $result[1] . ", or " . $result[2] . ".";
				$res1 = $result[0] . ", " . $result[1] . ", or " . $result[2];
			}
			query("INSERT INTO history (id, so, type, name, result) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], "Spouse", "Mendelian", $name, $res1);
			if (isset($_POST['emailyn'])) {
				$name1 = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
				$msg = "Hello! " . $name1[0]["name"] . " wanted to let you know that " . $name . " can be " . $res;
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
				$mail->Subject = $name . " Spouse Genotype Probability - Mendelian Inheritance";
				$mail->Body = $msg;
				if ($mail->Send() === false) 
					render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => "However your email didn't send."]);
				else 
					render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => "Also, your email was successful!"]);
			}
			else 
				render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => ""]);
		} else if ($_POST["inhrtType"] == "incmplt") {
			$name = $_POST["name"];
			$al1 = $_POST["al1"];
			$al2 = $_POST["al2"];
			$p1 = $_POST["parent-1"];
			$p2 = $_POST["parent-2"];
			$c1 = $_POST["child-1"];
			$c2 = $_POST["child-2"];
			$alc = $al1 . $al1;
			$alc1 = $al1 . $al2;
			$alc2 = $al2 . $al2;
			$parents = array($p1, $p2, $alc[0], $alc[1]);
			$square = [];
			$k = 0;
			$result = [];
			$r = 0;
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
			for ($i = 0; $i < 4; $i++) {
				if ($square[$i] == $c1 . $c2 || $square[$i] == $c2 . $c1) {
					$result[$r] = $alc;
					$r++;
					break;
				}
			}
			$parents1 = array($p1, $p2, $alc1[0], $alc1[1]);
			$square1 = [];
			$k1 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square1[$k1] = $parents1[$i] . $parents1[$j];
						$k1++;
					} else {
						$square1[$k1] = $parents1[$i] . $parents1[$j];
						$k1++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square1[$i] == $c1 . $c2 || $square1[$i] == $c2 . $c1) {
					$result[$r] = $alc1;
					$r++;
					break;
				}
			}
			$parents2 = array($p1, $p2, $alc2[0], $alc2[1]);
			$square2 = [];
			$k2 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square2[$k2] = $parents2[$i] . $parents2[$j];
						$k2++;
					} else {
						$square2[$k2] = $parents2[$i] . $parents2[$j];
						$k2++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square2[$i] == $c1 . $c2 || $square2[$i] == $c2 . $c1) {
					$result[$r] = $alc2;
					$r++;
					break;
				}
			}
			$check = count($result);
			$res;
			if ($check == 0) {
				$res = "...There's a mistake in your alleles, this parent-offspring combination isn't possible.";
				$res1 = "N/A";
			}
			else if ($check == 1) {
				$res = "only " . $result[0] . ".";
				$res1 = $result[0];
			}
			else if ($check == 2) {
				$res = $result[0] . " or " . $result[1] . ".";
				$res1 = $result[0] . " or " . $result[1];
			}
			else if ($check == 3) {
				$res = $result[0] . ", " . $result[1] . ", or " . $result[2] . ".";
				$res1 = $result[0] . ", " . $result[1] . ", or " . $result[2];
			}
			query("INSERT INTO history (id, so, type, name, result) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], "Spouse", "Incomplete Dominance", $name, $res1);
			if (isset($_POST['emailyn'])) {
				$name1 = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
				$msg = "Hello! " . $name1[0]["name"] . " wanted to let you know that " . $name . " can be " . $res;
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
				$mail->Subject = $name . " Spouse Genotype Probability - Incomplete Dominance";
				$mail->Body = $msg;
				if ($mail->Send() === false) 
					render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => "However your email didn't send."]);
				else 
					render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => "Also, your email was successful!"]);
			}
			else 
				render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => ""]);
		} else if ($_POST["inhrtType"] == "co") {
			$name = $_POST["name"];
			$al1 = $_POST["cal1"];
			$al2 = $_POST["cal2"];
			$ral = $_POST["recAl"];
			$p1 = $_POST["parent-1"];
			$p2 = $_POST["parent-2"];
			$c1 = $_POST["child-1"];
			$c2 = $_POST["child-2"];
			$alc = $al1 . $al1;
			$alc1 = $al1 . $al2;
			$alc2 = $al1 . $ral;
			$alc3 = $al2 . $al2;
			$alc4 = $al2 . $ral;
			$alc5 = $ral . $ral;
			$parents = array($p1, $p2, $alc[0], $alc[1]);
			$square = [];
			$k = 0;
			$result = [];
			$r = 0;
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
			for ($i = 0; $i < 4; $i++) {
				if ($square[$i] == $c1 . $c2 || $square[$i] == $c2 . $c1) {
					$result[$r] = $alc;
					$r++;
					break;
				}
			}
			$parents1 = array($p1, $p2, $alc1[0], $alc1[1]);
			$square1 = [];
			$k1 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square1[$k1] = $parents1[$i] . $parents1[$j];
						$k1++;
					} else {
						$square1[$k1] = $parents1[$i] . $parents1[$j];
						$k1++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square1[$i] == $c1 . $c2 || $square1[$i] == $c2 . $c1) {
					$result[$r] = $alc1;
					$r++;
					break;
				}
			}
			$parents2 = array($p1, $p2, $alc2[0], $alc2[1]);
			$square2 = [];
			$k2 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square2[$k2] = $parents2[$i] . $parents2[$j];
						$k2++;
					} else {
						$square2[$k2] = $parents2[$i] . $parents2[$j];
						$k2++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square2[$i] == $c1 . $c2 || $square2[$i] == $c2 . $c1) {
					$result[$r] = $alc2;
					$r++;
					break;
				}
			}
			$parents3 = array($p1, $p2, $alc3[0], $alc3[1]);
			$square3 = [];
			$k3 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square3[$k3] = $parents3[$i] . $parents3[$j];
						$k3++;
					} else {
						$square3[$k3] = $parents3[$i] . $parents3[$j];
						$k3++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square3[$i] == $c1 . $c2 || $square3[$i] == $c2 . $c1) {
					$result[$r] = $alc3;
					$r++;
					break;
				}
			}
			$parents4 = array($p1, $p2, $alc4[0], $alc4[1]);
			$square4 = [];
			$k4 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square4[$k4] = $parents4[$i] . $parents4[$j];
						$k4++;
					} else {
						$square4[$k4] = $parents4[$i] . $parents4[$j];
						$k4++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square4[$i] == $c1 . $c2 || $square4[$i] == $c2 . $c1) {
					$result[$r] = $alc4;
					$r++;
					break;
				}
			}
			$parents5 = array($p1, $p2, $alc5[0], $alc5[1]);
			$square5 = [];
			$k5 = 0;
			for ($i = 0; $i < 2; $i++) {
				for ($j = 2; $j < 4; $j++) {
					if ($i==0) {
						$square5[$k5] = $parents5[$i] . $parents5[$j];
						$k5++;
					} else {
						$square5[$k5] = $parents5[$i] . $parents5[$j];
						$k5++;
					}
				}
			}
			for ($i = 0; $i < 4; $i++) {
				if ($square5[$i] == $c1 . $c2 || $square5[$i] == $c2 . $c1) {
					$result[$r] = $alc5;
					$r++;
					break;
				}
			}
			$check = count($result);
			$res;
			$res1;
			if ($check == 0) {
				$res = "...There's a mistake in your alleles, this parent-offspring combination isn't possible.";
				$res1 = "N/A";
			}
			else if ($check == 1) {
				$res = "only " . $result[0] . ".";
				$res1 = $result[0];
			}
			else if ($check == 2) {
				$res = $result[0] . " or " . $result[1] . ".";
				$res1 = $result[0] . " or " . $result[1];
			}
			else if ($check == 3) {
				$res = $result[0] . ", " . $result[1] . ", or " . $result[2] . ".";
				$res1 = $result[0] . ", " . $result[1] . ", or " . $result[2];
			}
			else if ($check == 4) {
				$res = $result[0] . ", " . $result[1] . ", " . $result[2] . ", or " . $result[3] . ".";
				$res1 = $result[0] . ", " . $result[1] . ", " . $result[2] . ", or " . $result[3];
			}
			else {
				$res = $result[0] . ", " . $result[1] . ", " . $result[2] . ", " . $result[3] . ", or " . $result[4] . ".";
				$res1 = $result[0] . ", " . $result[1] . ", " . $result[2] . ", " . $result[3] . ", or " . $result[4];
			}
			query("INSERT INTO history (id, so, type, name, result) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], "Spouse", "Codominance", $name, $res1);
			if (isset($_POST['emailyn'])) {
				$name1 = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
				$msg = "Hello! " . $name1[0]["name"] . " wanted to let you know that " . $name . " can be " . $res;
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
				$mail->Subject = $name . " Spouse Genotype Probability - Codominance";
				$mail->Body = $msg;
				if ($mail->Send() === false) 
					render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => "However your email didn't send."]);
				else 
					render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => "Also, your email was successful!"]);
			}
			else 
				render("spouseResult.php", ["indexActive" => "", "aboutActive" => "", "offspringActive" => "", "spouseActive" => "active", "historyActive" => "", "name" => $name, "result" => $res, "email" => ""]);
		}
	}
?>

