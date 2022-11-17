<?php
include_once 'banco.php';

$sql="SELECT * FROM review WHERE aprovado = true"; 
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
$dados = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($dados);


?>