<?php
$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

session_start()		
require'adminheader.php';
require'../Template/section.php';
?>

<main>


<h1>Welcome to Greg's Golf Admin</h1>
<h2>You are now logged in</h2>

<p>I'm a Golf Enthusiast who reviews everything to do with golf. Courses, putters, golfers, etc!</p>
			
			<?php	



if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	;
	?>

	
	<ul class="reviews">

				<li>10/08/2018 - <a href="#">Course review: Wentworth</a></li>
				<li>02/07/2018 - <a href="#">Club review: Ping's New Putter</a></li>
				<li>22/06/2017 - <a href="#">Course review: St. Andrews</a></li>

			</ul>
<?php
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
</main>

<?php
require'../Template/sidebar.php';
require'../Template/footer.php'


	
?>