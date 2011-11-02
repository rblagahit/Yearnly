<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Yearnly</title>
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
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
			<div class="six columns">
				<h3>Log In</h3>
				<form id="login" method="" action="">
					<fieldset>
						<label for="email">Email</label>
						<input type="text" class="oversize input-text" id="email" name="email" />
						<label for="password">Password</label>
						<input type="password" class="oversize input-text" id="password" name="password" />
						<input type="submit" value="Log In" />
					</fieldset>
				</form>
			</div>
			<div class="six columns">
				<h3>Sign Up</h3>
				<form id="signup" method="" action="">
					<fieldset>
						<label for="email">Email</label>
						<input type="text" class="oversize input-text" id="email" name="email" />
						<label for="name">Full Name</label>
						<input type="text" class="oversize input-text" id="name" name="name" />
						<label for="password">Password</label>
						<input type="password" class="oversize input-text" id="password" name="password" />
						<input type="submit" value="Sign Up
						" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>
</body>
</html>