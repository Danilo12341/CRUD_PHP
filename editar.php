<?php
   
    include "db.php";
    $nome ="";
    $email ="" ;
    $senha ="";
    $data ="";
	$error="";
	$success="";
	
	if($_SERVER["REQUEST_METHOD"]=='GET'){
	    if(isset($_GET['id'])){
	          $id = $_GET['id'];

		      $sql = "SELECT * from `user` where id=$id";
		      $result = $conn->query($sql);
		      $row = $result->fetch_assoc();
		     
		      $nome = $row['nome'];
		      $email = $row['email'];
		      $senha = $row['senha'];
		      $data = $row['data_nascimento'];
            } 
    }else{
    	$id = $_POST['id'];
    	$nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data = $_POST['data'];

        $sql = "update user set nome='$nome', email='$email', senha='$senha', data_nascimento='$data' where id='$id'";
        $result = $conn->query($sql);
        header("location:index.php");
    
    }

?>



<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
   <div class="card-header bg-primary">
   <h1 class="text-white text-center">  Create New Member </h1>
   </div><br>

    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

     <label> NOME: </label>
     <input type="text" name="nome" value="<?php echo $nome; ?>"  class="form-control"> <br>

     <label> EMAIL: </label>
     <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

     <label> SENHA: </label>
     <input type="password" name="senha" value="<?php echo $senha; ?>"  class="form-control"> <br>

     <label> DATE: </label>
     <input type="date" name="data" value="<?php echo $data; ?>"  class="form-control"> <br>

     <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
     <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

   </div>
 </form>
 </div>
</body>
</html>