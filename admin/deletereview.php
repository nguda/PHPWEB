<?php
require'adminheader.php';
require'../Template/sidebar.php';
require'../Template/footer.php';
?>

<main>

			<form action="" method="POST">
			<label>Review:</label>
			<label>Description:</label>
			<select name="description">
	</main>	
	<?php
				
						
				
			$stmt = $pdo->prepare('SELECT * FROM review');
			$stmt->execute();
				$reviews = $pdo->prepare('select * from review');
				$reviews->execute();
				foreach ($reviews as $review) { ?>
				<option value="<?=$review['id'];?>"><?=$review['title'];?></option>
			
			}
		}
	
	?>
	</select>

	<input type="submit" name="submit" value="Add" />
</form>

<?php


	if (isset($_POST['submit'])) {
		
			$review = $pdo->query('DELETE * FROM review WHERE review = ' . $_POST['review']);
			
			echo 'review deleted';

			echo' REVIEW DELETED';
			
		}
		}
		?>
		</main>
