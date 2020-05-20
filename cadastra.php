<?php
include_once("conexao.php");

$codigo=$_POST["codigo"];
$nome=$_POST['nome'];
$cep=$_POST["cep"];
$numero=$_POST["numero"];
$tel=$_POST["telefone"];
$email=$_POST['email'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$disc=$_POST['disciplina'];

$sqli="INSERT INTO pessoa VALUES('$codigo','$nome','$cep','$rua','$numero','$tel','$email','$bairro','$cidade','$estado','$disc','#','#','#','#','#')";
mysqli_query($strcon,$sqli) or die(mysqli_error($strcon));
mysqli_close($strcon);
header('Location: sucessoaluno.php');
?>
  
