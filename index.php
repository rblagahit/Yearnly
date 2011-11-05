<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Yearnly</title>
	<link rel="stylesheet" href="_assets/stylesheets/foundation.css">
	<link rel="stylesheet" href="_assets/stylesheets/app.css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="_assets/stylesheets/ie.css">
	<![endif]-->
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script src="_assets/javascripts/Helper.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div class="five columns"><h1>Yearnly</h1></div>
				<hr />
			</div>
		</div>
		
		<div class="row">
			<div class="five columns offset-by-one">
				<h3>Log In</h3>
				<form id="login" method="post" action="home.php">
					<fieldset>
						<label for="email">Email</label>
						<input type="text" class="oversize input-text" id="email" name="email" />
						<label for="password">Password</label>
						<input type="password" class="oversize input-text" id="password" name="password" />
						<input type="submit" class="nice medium blue button radius" value="Log In" />
					</fieldset>
				</form>
			</div>
			<div class="five columns">
				<h3>Sign Up</h3>
				<form id="signup" method="post" action="signup.php">
					<fieldset>
						<label for="email">Email</label>
						<input type="text" class="oversize input-text signupemail" id="email" name="email" /><p class="errortext" id="emailchecker"></p>
						<label for="name">Full Name</label>
						<input type="text" class="oversize input-text" id="name" name="name" />
						<label for="password">Password</label>
						<input type="password" class="oversize input-text" id="password" name="password" />
						<input type="submit" class="nice medium red button radius" value="Sign Up" id="signupbutton" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<script src="_assets/javascripts/foundation.js"></script>
	<script src="_assets/javascripts/app.js"></script>
</body>
</html>