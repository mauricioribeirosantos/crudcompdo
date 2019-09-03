<?php

	//include('conexao.php');

	function adicionaAutor($conn, $autor) {
		$stmt = $conn->prepare("INSERT INTO autor (nome) VALUES ('{$autor}')");
		if($stmt->execute()) {
			return true;
		}
		else {
			return false;
		}
	}

	function retornaAutorId($conn) {
		$stmt = $conn->prepare("SELECT * FROM autor ORDER BY id");
		$stmt->execute();

		$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $resultados;
	}

	