<?php

$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
					[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
session_start();
require'adminheader.php';
require'../Template/section.php';
?>


<?php							
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			if (isset($_POST['submit'])) {

			$stmt = $pdo->prepare('INSERT INTO reviewcategory (name) VALUES (:name)');

			$criteria = [
				'name' => $_POST['name']
			];
			$stmt->execute($criteria);
			
		echo 'Platform ' . $_POST['name'] . ' added';
	}
		else {
?>
		<main>
		<h2>Add category</h2>
		
			<form action="" method="post">
			<div class="input-group">
				<label>name</label> <input type="text" name="name" required />
				</div
				<div class="input-group">
				<input type="submit" name="submit" class="btn" value="submit" required  />
				</div>
		
		</div>
			</form>
		</main>

			<?php
		}
	}

else {
	?>
		
		<h1>Login</h1>
			<form action="/login.php" method="post">
			<div class="input-group">
				<label>Username </label> <input type="text" name="username" required />
				</div>
				<div class="input-group">
				<label>Password</label> <input name="Password" type="Password" name="2" required />
					</div>
				<div class="input-group">
				<input type="submit" name="submit" class="btn" value="Login" required  />
				</div>
				<div class="input-group">
				 <a href="index.php"></a>
		</div>
		
<?php
}


	?>
<?php
require'../Template/sidebar.php';
require'../Template/footer.php'
?>


