<?php

		function connect() {
        $host = 'dragon.ukc.ac.uk';
		$dbname = 'otb3';
		$user = 'otb3';
		$pwd = 'rerom6o';
		
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