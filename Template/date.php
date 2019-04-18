<?php

	$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		$date = new DateTime();
	$stmt = $pdo->prepare('INSERT INTO review(title,description, datestamp)
	VALUES (:title,:description, :datestamp)')
		$values = [
		'title' => $POST['title'],
		'description' => $POST[description],
			'datestamp' => $date
		];
	
	$stmt->execute($values);