<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CHAD CODE</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />   
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <link href="css/login.css" rel="stylesheet" />
        <!-- <script src="scrollUp.min.js"></script> -->
</head>
<body>
<?php include 'pt-header.php'; ?>
<!-- partial:index.partial.html -->
<section class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
<div class="login-box">
  <h2>Login</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="user-box">
      <input type="text" name="email" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="password" name="pass" required="">
      <label>Senha</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button style="background: transparent; border: none; color:white;" type="submit" name="salvar">SALVAR</button>
    </a>
  </form>
</div>
</section>
<!-- partial -->
</body>
</html>

<?php
   if (isset($_POST['salvar'])){
       $conexao=mysqli_connect("localhost","root","","chadcode");
       
       $user=$_POST["user"];
       $email=$_POST["email"];
       $password=$_POST["pass"];
       
    $sql="SELECT * FROM cadastro WHERE email ='$email'";
    $result=mysqli_query($conexao,$sql);
       $loginencontrado=mysqli_num_rows($result);
       echo $loginencontrado;
           if($loginencontrado > 0){
           
           echo "login já existente";
           
       }
       
       else{
           
           $sqli="INSERT INTO cadastro (user, email, pass) VALUES ('$user','$email','$pass')";
           
           $result=mysqli_query($conexao,$sqli);
       }}
?>
