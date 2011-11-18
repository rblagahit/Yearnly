<?php
require_once("classes/AutoLoader.php");

if(isset($_SESSION["userid"])){
	try{
		$user = User::LoadUserById($_SESSION["userid"]);
	}catch(Exception $e){
		header("Location: index.php?id=".base64_encode($e->getMessage()));
	}
}else{
	$error = base64_encode("No user found.");
	header("Location: index.php?id=".$error);
}

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
				<a href="logout.php" class="button red">Log Out</a>
				<hr />
			</div>
		</div>
		
		<div class="row">
			<dl class="tabs">
				<dd><a href="#profile_tab" class="active">Profile</a></dd>
				<dd><a href="#friends_tab">Friends</a></dd>
				<dd><a href="#lists_tab">Lists</a></dd>
				<dd><a href="#dibs_tab">Dibs</a></dd>
			</dl>
			<ul class="tabs-content">
				<li class="active" id="profile_tab">
					<div class="module" id="tagline">
						<h4>Tagline</h4>
						<p>Welcome, <?php echo $user->name; ?> (This is here for me to know who is logged in we can move this later)</p>
						<div class="alert-box">
							Tell everyone a little bit about yourself!
							<a href="" class="close">&times;</a>
						</div>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
					</div>
					<div class="module" id="tagline">
						<h4>Things I Want</h4>
						<div class="alert-box warning">
							If an item isn't assigned to a list, it'll show up here.
							<a href="" class="close">&times;</a>
						</div>
						<div class="item row">
							<div class="item_details three columns">
								<h5>iPhone 4</h5>
								<a class="link" href="http://apple.com" title="iPhone 4">http://apple.com</a>
								<p class="description">I just want one so badly!</p>
							</div>
							<ul class="item_tools three columns">
								<li class="move inline"><a class="move" href="">Move</a></li>
								<li class="edit inline"><a href="">Edit</a></li>
								<li class="delete inline"><a href="">Delete</a></li>
							</ul>
						</div>
						<div class="item row">
							<div class="item_details three columns">
								<h5>Modern Warfare 3</h5>
								<a class="link" href="http://mw3.com" title="Modern Warfare 3">http://mw3.com</a>
								<p class="description">So I can pwn some noobs.</p>
							</div>
							<ul class="item_tools three columns">
								<li class="move inline"><a class="move" href="">Move</a></li>
								<li class="edit inline"><a href="">Edit</a></li>
								<li class="delete inline"><a href="">Delete</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li id="friends_tab">This is simple tab 2's content. Now you see it!</li>
				<li id="lists_tab">This is simple tab 3's content. It's, you know...okay.</li>
				<li id="dibs_tab">These are dibs.</li>
			</ul>
		</div>
	</div>
</body>
</html>
