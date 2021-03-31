<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="icon" href="images/favicon.png" />
    <title># 1: <?php echo $title; ?></title>
</head>

<body>
    <div class="loading"></div>
    <div class="navbar">
        <a href="ranch.php" id="ranch"> Le ranch </a>
        <a href="elevage.php" id="elevage"> L'élevage </a>
        <a href="service.php" id="service"> Nos services </a>
        <a href="contact.php" id="contact"> Contact </a>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $(".loading").fadeOut("2000");
    })
    </script>