<?php
$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		session_start();
require'adminheader.php';
require'../Template/section.php';
require'../addreviewform.php';

?>

<?php		

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		
	
		
				$stmt = $pdo->prepare('SELECT * FROM review');
						$stmt->execute();
						foreach ($stmt as $row) {
						}
							
				$date = date('Y-m-d');		
			
			if (isset($_POST['submit'])) {

				$stmt = $pdo->prepare('INSERT INTO review (title, description,datestamp) 
				VALUES (:title, :description,:datestamp)');
			
				$criteria = [
					'title' => $_POST['title'],
					'description' => $_POST['description'],
					'datestamp' => $date
				];
				
			$stmt->execute($criteria); 
				echo 'Review added';
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



