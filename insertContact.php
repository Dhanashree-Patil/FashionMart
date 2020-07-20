<?php
	try{
		$pdo=new PDO('mysql:host=localhost;dbname=fashion_mart','root','');
		session_start();
		
		$msg=$_POST[msg];
		$uname=$_POST[uname];
		$email=$_POST[email];
		$subject=$_POST[subject];
		
		$insert=$pdo->prepare("INSERT INTO `contact`( `msg`,`uname`,`email`,`subject` ) VALUES (:msg,:uname,:email,:subject)");
	
		$insert->bindParam(':msg',$msg);
		$insert->bindParam(':uname',$uname);
		$insert->bindParam(':email',$email);
		$insert->bindParam(':subject',$subject);
		$insert->execute();
	}catch(PDOException $f){
		echo $f->getMessage();
	}
	header('location:index.html');
?>

