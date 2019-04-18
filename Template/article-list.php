
<?php
	$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		
$review = $pdo->prepare('SELECT * FROM review ORDER BY datestamp DESC');
$review->execute();  

foreach ($review as $review){
echo'<li>' . $review['datestamp'].'- <a href="#">review:'. $review['title'] .' - '.$review['description'].'</a></li>';
}
?>