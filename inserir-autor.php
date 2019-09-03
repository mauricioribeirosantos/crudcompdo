<?php

	include('conexao.php');
	include('funcoes.php');
	
	if(!empty($_POST)) {
		$autor = $_POST['autor'];
		if(strlen($autor) <= 0) {
			echo "Vazio";
		}
		else {
			if(adicionaAutor($conn, $autor)) {
				echo "inserido";
			}
			else {
				echo "Erro";
			}
		}
	}
	else {
		echo "2 Vazio";
	}