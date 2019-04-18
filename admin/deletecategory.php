<?php

$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
session_start();		
require'adminheader.php';
?>


<?php
 
 
 	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

if (isset($_POST['submit'])) {
			$id = $_POST['categoryid'];
	
			$stmt = $pdo->prepare("DELETE FROM reviewcategory WHERE id = $id");
			
			$stmt->execute();

			echo' Category DELETED';
			
	}
	else {

		?>
		
		
		
		<main>
		<h2></h2>
		
			<form action="deletecategory.php" method="post">
			<label>Delete category</label>
				<select name="categoryid">
				<?php
				$categories = $pdo->prepare('select * from reviewcategory');
				$categories->execute();
				foreach ($categories as $category) { ?>
				<option value="<?=$category['id'];?>"><?=$category['name'];?></option>
				<?php
				}
				?>
				</select>
				<input type="submit" name="submit" class="btn" value="submit" required  />
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
require'../Template/footer.php';
?>

