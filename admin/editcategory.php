<?php
session_start();
$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	session_start();
require'adminheader.php';
require'../Template/section.php';

require'../Template/sidebar.php';
require'../Template/footer.php';

?>
<main>

			<form action="" method="POST">
			<label>edit category </label>
			<label>Review:</label>
			<input type="text" name="name"  value="<?php echo $review['id']; ?>" />
			<label>Description:</label>
			<select name="description">
	</main>	
	<?php
				
						
				
			$stmt = $pdo->prepare('SELECT * FROM reviewcategory');
			$stmt->execute();

		foreach ($stmt as $row) {
			if ($row['id'] == $review['id']) {
				echo '<option value="' . $row['id'] . '" selected="selected">' . $row['id'] . '</option>';
			}
			
			}
		
	?>
	
	
	</select>

	<input type="submit" name="submit" value="Add" />
</form>

		
