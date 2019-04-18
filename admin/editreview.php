<?php
session_start();
$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);		
require'adminheader.php';
require'../Template/section.php';

require'../Template/sidebar.php';
require'../Template/footer.php';
?>


<main>

			<form action="" method="POST">
			<label>edit review </label>
			<label>Review:</label>
			<input type="text" name="name"  value="<?php echo $review['title']; ?>" />
			<label>Description:</label>
			<select name="description">
	</main>	
	<?php
				
						
				
			$stmt = $pdo->prepare('SELECT * FROM review');
			$stmt->execute();

		foreach ($stmt as $row) {
			if ($row['title'] == $review['title']) {
				echo '<option value="' . $row['title'] . '" selected="selected">' . $row['title'] . '</option>';
			}
			
			}
		
	?>
	</select>

	<input type="submit" name="submit" value="Add" />
</form>


<?php			
			
			if (isset($_POST['submit'])) {

				$stmt = $pdo->prepare('UPDATE review 
													SET title = :title
													WHERE id=:id');
				
				
			$values = [
			'title' => $_POST['title'],
			'id' =>$POST['id']
		];
		$stmt->execute($values);
		
	echo 'REVIEW ' . $_POST['title'] . ' edited';
			}
	
else if (isset($_GET['id'])) {
				
				$gameStmt = $pdo->prepare('SELECT * FROM review WHERE title = :title');

	$values = [
		'title' => $_GET['title']
	];

	$gameStmt->execute($values);

	$game = $gameStmt->fetch();
	
}
?>

