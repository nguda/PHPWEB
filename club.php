<?php

session_start();
	$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
require'Template/header.php';
require'Template/section.php';
require'Template/main.php';
require'Template/sidebar.php';
require'Template/footer.php';

?>
	<main>
			<h1>Welcome to Greg's Golf Reviews</h1>

			<p>I'm a Golf Enthusiast who reviews everything to do with golf. Courses, putters, golfers, etc!</p>

			<hr />
			<h2>Review list</h2>
			<ul class="reviews">

				<li>10/08/2018 - <a href="#">Course review: Wentworth</a></li>
				<li>02/07/2018 - <a href="#">Club review: Ping's New Putter</a></li>
				<li>22/06/2017 - <a href="#">Course review: St. Andrews</a></li>

			</ul>
	<form action="" method="POST" enctype="multipart/form-data">
				<label>Add comments</label>
				<textarea name="description"></textarea>
				<input type="submit" name="submit" value="submit" />
			
			</form>
			</main>
			
			<?php
			
			if (isset($_POST['submit'])) {
				
				$review= $pdo->prepare('SELECT * from review ');
				$reviewcategory = $pdo->prepare('SELECT * FROM reviewcategory WHERE id = :id');
				$review->execute();
				
				echo'<ul>';while ($review = $review->fetch()) {
								$values = 
								['id' => $review['id']];
								$review->execute($values);
								$review = $review->fetch();
								echo'<li>' 
								. $review['title'] . ' ' . $review['decription'] . 
								' posted the message <strong>' . $message['message'] . '</strong>' .
								' on ' . $review['datestamp']. '</li>';}echo'</ul>';
			
			}
			
			
			?>
			
			