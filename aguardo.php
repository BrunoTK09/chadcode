<?php
include_once 'banco.php';

$sql="SELECT * FROM review"; 
$result=mysqli_query($conn,$sql);
while($linha = mysqli_fetch_array($result)){

echo "<div data-div=".$linha['id'].">";

?>
    
<img style="width:10%" src="./images/<?php echo $linha['img'];?>">

<?php
    echo"img: ".$linha["img"]."<br>";
    echo"Nome: ".$linha["nome"]."<br>" ;  
    echo"Email: ".$linha["email"]."<br>";        
    echo"Categoria: ".$linha["cat"]."<br>";
    echo"Comentario: ".$linha["comentario"]."<br>";    
    echo"Id: ".$linha["id"]; 
?>

    <button data-id="<?php echo $linha["id"]?>" onclick="aprovar(this)">Aprovar</button>
    <button data-id="<?php echo $linha["id"]?>" onclick="excluir(this)">Excluir</button>

<?php

 echo "<hr>";

 echo "</div>";

}

?>

<script>

    function aprovar(botao){
        //Pegando atributo id do botão clicado
       const id = botao.getAttribute("data-id");

       //Faz a requisição para aprovar enviando no body o id do item a ser aprovado
        fetch("./aprovar.php", {
            method: 'post',
            body: id,
        })


}

    async function excluir(botao){
         //Pegando atributo id do botão clicado
         id = botao.getAttribute("data-id");
         const removerDiv = document.querySelector(`[data-div="${id}"]`);

         

        await fetch("./excluir.php", {
             method: 'post',
             body: id,
         })

         removerDiv.style.display = "none";



         
    }

</script>