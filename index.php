<!doctype html>
<html lang="pt-br">
  <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Cadastro</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
	   <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Cadastro</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
				    <div class="collapse navbar-collapse" id="navbarNav">
						     <ul class="navbar-nav">
						        <li class="nav-item">
						          <a class="nav-link active" aria-current="page" href="">Home</a>
						        </li>
						        <li class="nav-item">
						          <a class="nav-link" href="novo_usuario.php">Novo Usuário</a>
						        </li>
						        <li class="nav-item">
						          <a class="nav-link" href="#">Lista Usuário</a>
						        </li> 
					         </ul>
				    </div>
		  </div>
	  </nav>
	  <div class="container">
	  	  <div class="row">
	  	  	   <div class="col mt-5">
	  	  	   	<table class="table table-striped table-dark table-bordered">
	  	  	   		<thead>
						<tr class="thead-dark">
							<th>Nome</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						<tr>
                   </thead>
                   </tbody>
                        <?php
                            include "db.php";
					        $sql = "select * from user";
					        $result = $conn->query($sql);
					        if(!$result){
					          die("Invalid query!");
					        }
					        while($row=$result->fetch_assoc()){
					          echo "
						        <tr>
							        <td>$row[nome]</td>
							        <td>$row[email]</td>
							        <td>
					                  <a class='btn btn-success' href='editar.php?id=$row[id]'>Edit</a>
					                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
					                </td>
							          
				               </tr>"; }
                        ?>
				   </tbody>
				</table>
	  	  	   	    	
	  	  	   </div>
	  	  </div>
	  </div>
     
      

      <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>