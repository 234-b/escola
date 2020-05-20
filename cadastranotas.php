<?php
   $conn=mysqli_connect('localhost','root','','cliente')or die('Não foi');
    
    $codigo=$_POST['codaluno'];
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $notafinal=$_POST['notafinal'];

    
    $grava="UPDATE pessoa SET nota1='$nota1',nota2='$nota2',nota_final='$notafinal' where código='$codigo'";
    mysqli_query($conn,$grava) or die (mysqli_error($conn));
    mysqli_close($conn);
    echo "Notas cadastradas";

?>