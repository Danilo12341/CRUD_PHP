<?php

    include "db.php";
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data = $_POST['data'];

        $q = " INSERT INTO `user`(`nome`, `email`, `senha`, `data_nascimento` ) VALUES ( '$nome', '$email', '$senha','$data')";
        $query = mysqli_query($conn,$q);
 
        //$sql = "INSERT INTO user (nome,email,senha,data_nascimento)  VALUES ('$nome','$email','$senha','$data')";
        //$res = $conn->query($sql);


       
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

     <label> NOME: </label>
     <input type="text" name="nome" class="form-control"> <br>

     <label> EMAIL: </label>
     <input type="text" name="email" class="form-control"> <br>

     <label> SENHA: </label>
     <input type="password" name="senha" class="form-control"> <br>

     <label> DATE: </label>
     <input type="date" name="data" class="form-control"> <br>

     <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
     <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

   </div>
 </form>
 </div>
</body>
</html>