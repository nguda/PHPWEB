<?php
session_start();

?>
<main>

<div class="header">
			<h2>Register</h2>
			</div>
			<form action="" method="post">
			<div class="input-group">
				<label>Username </label> <input type="text" name="username" />
				</div>
				<label>Email</label> <input type="text" name="Email" />
				<div class="input-group">
				<label>Password</label> <input type="text" name="Password" />
					</div>
					<div class="input-group">
				<label>Conform password</label> <input type="text" name="" />
				</div>
				<div class="input-group">
				<input type="submit" name="submit" value="Register" />
				</div>
				
			</form>
</main>


<?php
require'Template/header.php';
require'Template/section.php';
require'Template/sidebar.php';
require'Template/footer.php';

if (isset($_POST['submit'])) {
	
		$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		$password =$_POST['Password'];
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	
	$stmt = $pdo->prepare('INSERT INTO user (username, Email,Password)
	VALUES(:username,:Email,:Password)');
	$values = [
		'username' => $_POST['username'],
		'Email' => $_POST['Email'],
		'Password' => $hashed_password
		];
	$stmt->execute($values);

		echo'<p>Registration Completed</p>';
	}
	
	
	



?>

