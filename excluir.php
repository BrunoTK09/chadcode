<?php 
include_once 'banco.php';

//Pegando dados do javascript
$body = json_decode(file_get_contents('php://input'));

//Se não tiver dados, só retorna
if (empty($body)) {
    return [];
}

//Atribuindo valores
$id = $body;
$sql = "DELETE FROM review WHERE id = '$id'";
$result=mysqli_query($conn,$sql);
$num_rows = mysqli_affected_rows($conn);

//Recebe o numero de linhas afetadas no banco de dados
if($num_rows > 0){
    echo "Atualizado com sucesso";
}else{
    echo "Falha ao atualizar";
}



?>