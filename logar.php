<?php
include_once 'conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $dbcon->query("SELECT * FROM tblogin where email='$email' AND senha='$senha' ");

if(mysqli_num_rows($sql)>0){
    echo "login ok,";
    while($dados = $sql-> fetch_array()){
    
    echo $dados['id'];
    echo ",";
    echo $dados['nome'];

}



}else{
 echo "login erro";
}


?>