	<main>
	<form action="" method="POST" enctype="multipart/form-data">
				<label>Category</label>
				<select name="categoryid">
				<?php
				$categories = $pdo->prepare('select * from reviewcategory');
				$categories->execute();
				foreach ($categories as $category) { ?>
				<option value="$reviewcategory['id']"><?=$category['name'];?></option>
				<?php
				}
				?>
				</select>
				<label>title</label>
				<input type="text" name="title" />
				<label>Description</label>
				<textarea name="description"></textarea>
				
			
		
				<input type="submit" name="submit" value="submit" />
			
			</form>
			</main>