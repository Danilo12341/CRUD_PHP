<?php


        //host
        $host = "localhost";

        //usuario
        $usuario = "root";

        //senha
        $senha = "";

        //banco de dados
        $database = "dados";

   
        $conn = new mysqli($host, $usuario, $senha, $database);

         //ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($conn, 'utf8');

         //verificar se houve erro de conexão.
        if($conn->connect_error){
           die("connection failed" .$conn->connect_error);
        }

        echo "sucesso";

      
		     

       

  
	 
?>
