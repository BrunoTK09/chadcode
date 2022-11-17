<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - Chad Code</title>
  <link rel="stylesheet" href="./css/login.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<body>
<?php include 'pt-header.php'; ?>
<!-- partial:index.partial.html -->
<section class="marg">
<div class="login-box">
  <h2>Cadastro</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="user" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
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
       $pass=$_POST["pass"];
       
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
