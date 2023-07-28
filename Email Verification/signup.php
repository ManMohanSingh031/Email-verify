<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	
  <style>
      .center {
        position: relative;
        padding: 60px;
        background: rgba(225, 225, 225, 0.25);
        backdrop-filter: blur(15px);
        border: 1px solid #433838;
        border-bottom: 1px solid rgba(225, 225, 225, 0.5);
        border-radius: 20px;
        border-right: 1px solid rgba(225, 225, 225, 0.5);
        width: 500px;
        display: flex;
        flex-direction: column;
        gap: 30px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        align-items: center;
        margin-left: 25%;
        margin-top: 10%;
      }
    </style>
	
</head>
<body>
	<h1>Signup</h1>

	<?php include('header.php')?>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<div class="center">
		<form method="post">
			<input type="text" name="username" placeholder="Username"><br>
			<input type="text" name="email" placeholder="Email"><br>
			<input type="text" name="password" placeholder="Password"><br>
			<input type="text" name="password2" placeholder="Retype Password"><br>
			<br>
			<input type="submit" value="Signup">
		</form>
	</div>
</body>
</html>
