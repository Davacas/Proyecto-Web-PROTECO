<?php
    if ( empty($_POST['nickname']) || empty($_POST['password'] )) {
        header("location: ./error-data.php");
        exit();
    } else {
        session_start();
    	require 'db.php';
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Usuarios where nickname='".$_POST['nickname']."'";
        $q = $pdo->prepare($sql);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        
        if($data['password'] == $_POST['password']) {
        	session_start();
			$_SESSION['nickname'] = $data['nickname'];
			$_SESSION['nombre'] = $data['nombre'];
			$_SESSION['email'] = $data['email'];
			$saldo_total = 0;
			$pdo = Database::connect();
			header('location: ./autenticacion.php');
        	exit();
        }
        else {
        	header('location:./error-data.php');
        	exit();
        }
    } 
?>