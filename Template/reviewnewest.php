<aside>

			<h1>Latest Reivews</h1>
			<ul>
			
			
				
				
				<?php
				
				$date = new DateTime();
				
			$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		$reviews = $pdo->prepare('SELECT * FROM review');
	
		foreach ($reviews as $review) {
		$productDate = $date->format('d-m-Y');
		echo '<li>'.$productDate.'<a href="#">Course review: '.$review['title'].'</a></li>';
		}
		?>
			</ul>

		</aside>