<?php
session_start();
    $conexao=mysqli_connect('localhost','root','','cliente');
if($conexao){
    
    $nome=$_POST['nome_disc'];
    $codigo2=$_POST["codigo"];
    
    $sql="SELECT COUNT(nome_disc)as total from disciplina where nome_disc='$nome'";
    $result=mysqli_query($conexao,$sql);
    $row=mysqli_fetch_assoc($result);
    
    if($row['total']==1){
        $_SESSION['matéria_existe']=true;
        header('Location:errocad.php');
        exit;
    }
    
    $sql="INSERT INTO disciplina VALUES('$codigo2','$nome')";
    mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
    if($conexao->query($sql)===true){
    $_SESSION['cadastrada']=true;
        }
mysqli_close($conexao);
header('Location: sucesso.php');
    exit;
}


?>