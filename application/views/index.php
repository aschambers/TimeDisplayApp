<html>
<head>
	<title>Great Number Game</title>
	<style type="text/css">
		body {
			text-align:center;
		}
		.red {
			background-color:red;
			border:1px solid black;
			width:100px;
			padding:50px;
			margin-bottom:5px;
		}
		.green {
			background-color:green;
			border:1px solid black;
			width:100px;
			padding:50px;
			margin-bottom:5px;
		}
		.playagain {
			margin-top:10px;
		}
	</style>
</head>
<body>

	<div id='container'>
		<!-- client side version of echo -->
		<!-- <?= $this->session->userdata['number']; ?> -->
		<h1>Welcome to the Game</h1>
		<p>I am thinking of a number between 1 and 100</p>
		<p>Take a guess</p>
<center>
<?php 
		if($this->session->flashdata('result'))
		{
?>
			<p class='red'><?= $this->session->flashdata('result'); ?></p>
<?php
		}
		if($this->session->flashdata('correct'))
		{
?>
			<div class='green'>
				<p><?= $this->session->flashdata('correct'); ?> was the number!</p>
				<form class="playagain" action='reset' method='post'>
					<input type='submit' value='Play Again?'>
				</form>
			</div>
<?php
		}
?>
</center>
		<!-- action = check is the route name in our routes.php file  -->
		<form action='check' method='post'>
			<input type='text' name='guess' />
			<input type='submit' value='Submit' />
		</form>
	</div>

</body>
</html>













































































