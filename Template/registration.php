<?php
session_start();
require'header.php';
require'form.php';
require'sidebar.php';
require 'footer.php';


if (isset($_POST['submit'])) {
	
		$pdo = new PDO('mysql:dbname=new_schema;host=v.je','student','student',
		[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		
	
	$stmt = $pdo-> prepare ('SELECT * FROM user WHERE username=:username and Password=:Password  ');

	$values = [
		'username' =>$_POST['username'],
		'Password' =>$_POST['Password']
		];
	$stmt->execute($values);

	if(  $stmt->rowCount() != 0 ){
	$_SESSION['loggedin'] = $stmt->fetch();
	header('location: /admin/admin.php');
	}
		
		
		
	else{
		
		
		echo'<p>You did not enter the correct username and password</p>';
	}
	
	
}


?>

