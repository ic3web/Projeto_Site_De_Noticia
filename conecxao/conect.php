<?php

	function conectadb ($nameDB,$host,$user,$senha){
		$nameDB = "";
		$host = "";
		$user = "root";
		$senha = "";

		try {
			$conn = new PDO("mysql:dbname=$nameDB;host=$host","$root","$senha");
		} catch (PDOException $e) {
			echo "erro na conecxão do banco de dados ".$e->getMessage();
		}	
			}


?>