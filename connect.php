<?php

		function connect() {
        $host = 'domain';
		$dbname = 'username';
		$user = 'username';
		$pwd = 'password';
		
		try {
		
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($conn) {
            
           return $conn;
            
        }
        
        } catch (PDOException $e) {

            echo "PDOException: " .$e->getMessage();
        }
        
        }
?>