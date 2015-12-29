<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon1.ico"/>
    <title>CS50 Genes</title>
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300italic,400italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
    <!--Local CSS Libraries-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <!--Online CSS Libraries-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--Local Self-Code-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="container-fluid">
        <img class="center-block" src="img/gene.png" alt="Gene Icon" id="mainImg">
        <h1 class="text-center">CS50 Genes</h1>
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="<?=$indexActive?>"><a href="index.php">Home</a></li>
            <li role="presentation" class="<?=$aboutActive?>"><a href="about.php">About</a></li>
            <li role="presentation" class="<?=$offspringActive?>"><a href="offspring.php">Offspring Probability</a></li>
            <li role="presentation" class="<?=$spouseActive?>"><a href="spouse.php">Spouse Probability</a></li>
            <li role="presentation" class="<?=$historyActive?>"><a href="history.php">History</a></li>
	    <li role="presentation"><a href="logout.php">Log Out</a></li>
        </ul>
