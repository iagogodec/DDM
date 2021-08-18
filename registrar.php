<?php
include_once 'conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];


$sql2 = $dbcon->query("SELECT * FROM tblogin where email='$email' ");

if(mysqli_num_rows($sql2)>0){
    echo "email erro";
}else{
$sql3 = $dbcon->query("INSERT INTO tblgin('nome','email','senha') VALUES('$nome','$email','$senha')");
}


if($sql3){
    echo "registro ok";
}else{
 echo "registro erro";
}




?>