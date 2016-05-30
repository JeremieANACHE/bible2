<?php
// Database variables
$host = "damioneofa.mysql.db"; //database location
$user = "damioneofa"; //database username
$pass = "B819380cfc"; //database password
$table_name = "a_bible2-transactions"; //table name
$db_name = "damioneofa"; //database name
$url_redirect = "http://bible2.faith";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../landingpage/css/bootstrap.min.css">
	<link rel="stylesheet" href="../landingpage/css/main.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

	<script src="js/modernizr-2.7.1.js"></script>
	<title>Succès du transfert</title>
</head>
<body style="background-color:#17182F">
<div class="row" style="margin: 15px;">
	<div class="col-sm-offset-2 col-sm-8">
		<br><br><br>
		<h1>Merci !</h1>
		<br><br>
		<p><?php
			$link = mysql_connect($host, "$user", "$pass");
			mysql_select_db($db_name, $link);

			$resource = mysql_query("SELECT COUNT(id) FROM ".$table_name);
			$count = mysql_result($resource,0);

			echo "$count Rows\n";

			?></p>
		<br><hr><br>
		<div class="col-sm-6">
			<button class="btn btn-secondary btn-lg col-sm-offset-2 col-sm-8" onclick="OpenInNewTab('bible2/La_bible_2.epub')">Télécharger en .epub</button>
		</div>
		<div class="col-sm-6">
			<button class="btn btn-secondary btn-lg col-sm-offset-2 col-sm-8" onclick="OpenInNewTab('bible2/La_bible_2.pdf')">Télécharger en .pdf</button>
		</div>
	</div>
</div>
</body>
<script>
	function OpenInNewTab(url) {
		var win = window.open(url, '_blank');
		win.focus();
	}
</script>
</html>
