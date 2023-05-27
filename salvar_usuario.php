<?php

    switch($_REQUEST["acao"]){
		              case 'cadastrar':
		                   $nome =$_POST["nome"];
		                   $email =$_POST["email"];
		                   $senha =$_POST["senha"];
		                   $data =$_POST["data"];

		                   echo $nome;

		                   $sql = "INSERT INTO user (nome,email,senha,data_nascimento)  VALUES ({$nome},{$email},{$senha},{$data})";

		                   $res = $conn->query($sql);
		                    break;          
		              case 'editar':        
		                    break;
		              case 'excluir':    
		                   break;   
		             
		              
		          }
?>