<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Signed up</title>
		<link rel="stylesheet" href="thnx.css" />
	</head>
	<body>
		<header>
			<h1>Royal-Pizza</h1>
			<br>
		</header>
		<main>
			<h2>thanks for becoming a part of our site</h2>
			<br> 
<?php
    $finame = $_GET["finame"];
    $laname = $_GET["laname"];
    $email = $_GET["email"];
    $password = $_GET["word"];
    echo('Hi <b>' .$finame. $laname. '<b/>. Thank you for singing up. Your email is <b>'.$email.'</b>.  now you can sign in to our site');

?>
		</main>
        <footer>
            <p><small>©Royal Pizza Inc. All rights reserved</small></p>
        </footer>
	</body>
</html>
