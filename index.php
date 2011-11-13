<?php
require_once("classes/AutoLoader.php");
$page = new Page();
echo $page->Html_Head();
echo $page->Javascripts();
?>

	<title>Yearnly</title>
	
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
				<form id="login" method="post" action="authenticate.php">
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
				<form id="signup" method="post" action="authenticate.php">
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
</body>
</html>