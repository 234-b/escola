<?php
    include_once("conexao.php");
    $cod=$_POST['alunocod'];
    $aluno=$_POST['aluno'];
    $nota1=$_POST['nota1'];
     $nota2=$_POST['nota2'];
      $nota3=$_POST['nota3'];
    $disciplina=$_POST['disciplina'];
    $s1="A";
    $s2="B"; 
    $s3="C";
    $s4="D";
    $s5="F- REPROVADO POR FALTA";
       
  $media= ceil(($nota1+$nota2+$nota3)/3);

       if($nota1){
           $sql="UPDATE pessoa SET nota_1='$nota1 'WHERE nome='$aluno' AND Disciplina='$disciplina' AND código='$cod'";
       mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
       }
         if($nota2){
       $sql="UPDATE pessoa SET nota_2='$nota2 'WHERE nome='$aluno' AND Disciplina='$disciplina'";
       mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
         }
      
      if($nota3){
      $sql="UPDATE pessoa SET nota_3='$nota3 'WHERE nome='$aluno' AND Disciplina='$disciplina'";
       mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
          }
       

      $sql="UPDATE pessoa SET nota_final='$media 'WHERE nome='$aluno' AND Disciplina='$disciplina'";
       mysqli_query($strcon,$sql)or die(mysqli_error($strcon));

      
          if($media>=8.5){
              if($media<=10){
              $sql="UPDATE pessoa SET Situacao='$s1' WHERE nome='$aluno' AND Disciplina='$disciplina'";
           mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
              }
          }
   
           if($media>=7){
               if($media<=8.4){
                $sql="UPDATE pessoa SET Situacao='$s2' WHERE nome='$aluno' AND Disciplina='$disciplina'";
           mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
                   }
           }
    
          if($media<6){
              if($media<=6.9){
                $sql="UPDATE pessoa SET Situacao='$s3' WHERE nome='$aluno' AND Disciplina='$disciplina'";
           mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
           }
              }
if($media==4){
              if($media<=5.9){
                $sql="UPDATE pessoa SET Situacao='$s4' WHERE nome='$aluno' AND Disciplina='$disciplina'";
           mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
           }
              }
if($media<3.9){
              
                $sql="UPDATE pessoa SET Situacao='$s5' WHERE nome='$aluno' AND Disciplina='$disciplina'";
           mysqli_query($strcon,$sql)or die(mysqli_error($strcon));
           
              }
      
header('Location:sucessoaltera.php');
   mysqli_close($strcon);
   ?>



