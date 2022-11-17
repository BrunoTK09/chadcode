    <!DOCTYPE html>
<html lang="pt-br">
<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <link href="css/login.css" rel="stylesheet" />
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
<?php include 'pt-header.php'; ?>
<br>
<br>
<br>
<div class="formulario">
  <center>
    <section class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
    <form  name="formulario" method="POST" enctype="multipart/form-data" target="_self">
      <fieldset>
        <label for="img">Foto de Perfil:</label><br><br>
        <input type="file" name="img"><br><br>
      
        <label for="nome">Nome/Name:</label><br>
        <input type="text" name="nome"><br>

        <label for="email">email:</label><br>
        <input type="text" name="email"><br>

        <label for="cat">Categoria/Category</label><br>
        <input for="text" name="cat" placeholder="Java/Python/Css/etc...."><br>

        <label for="valor">Review</label><br>
        <input type="text" name="comentario" placeholder="..."><br><br>

        <input type="submit" name="cadastrar" value="Postar/Post it"><br><br>
      </fieldset>
    </form>
    </section>
  </center>    
</div>
</body>
</html>

<?php

if  (isset($_POST["cadastrar"])){
    $conexao=mysqli_Connect('localhost',"root","","chadcode");
    
    $img = $_FILES['img']['name'];
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $cat=$_POST["cat"];
    $comentario=$_POST["comentario"];

    
        $sql="INSERT INTO review (img, nome, email, cat, comentario) VALUES ('$img', '$nome', '$email', '$cat', '$comentario')";

        $temp=$_FILES['img']['tmp_name'];

        move_uploaded_file($temp,"images/$img");
        
        $resultado=mysqli_query($conexao,$sql);

       
      }
?>

