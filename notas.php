<?php
 include_once("conexao.php");
 
?>

<html>
    <head>
    <meta charset="utf-8">
        <title>Meu teste PHP</title>
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css"> 
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php" alt="Página inicial">Colégio TI Masters</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Cadastro de alunos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="disciplina.php">Cadastrar Disciplina</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="notas.php">Cadastrar Notas</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="alteranotas.php">Alterar Notas</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="relatorio.php">Relatório de alunos</a>
      </li>
     
      
    </ul>
  </div>
</nav>
       <div class="alert alert-primary" role="alert">
  Para calcular a média do aluno, informe a matéria da qual ele faz parte, o código dele, o nome do aluno, as notas do primeiro e segundo turno e clique em <strong>"Calcular Média".</strong>
</div>
         
            <div class="container">
               
                <form method="post" action="calcula.php" style="align-items: center">
        <div class="form-group">
    
    
     <div>
    <select name="disciplina" class="form-control">
        <option>Escolha a disciplina</option>
        <?php 
            $disciplina="SELECT * FROM disciplina";
            $result_disc=mysqli_query($strcon,$disciplina);
        while($row_disciplina=mysqli_fetch_assoc($result_disc)){?>
        <option value="<?php echo $row_disciplina['nome_disc'];?>"><?php echo $row_disciplina['nome_disc'];?>
        </option><?php
                
       }
        ?>
        
    </select></div><br>
             <div>
    <select name="aluno" class="form-control">
        <option>Escolha o aluno</option>
        <?php 
            $disciplina="SELECT * FROM pessoa";
            $result_disc=mysqli_query($strcon,$disciplina);
        while($row_aluno=mysqli_fetch_assoc($result_disc)){?>
        <option value="<?php echo $row_aluno['nome'];?>"><?php echo $row_aluno['nome'];?>
        </option><?php
                
       }
        ?>
        
    </select></div><br>
            <label for="exampleInputEmail1">Código do aluno:</label>
    <input type="text" class="form-control" name="alunocod">
            <label for="exampleInputEmail1">Avaliação 1:</label>
    <input type="text" class="form-control" name="nota1">
            <label for="exampleInputEmail1">Avaliação 2:</label>
    <input type="text" class="form-control" name="nota2">
            <label for="exampleInputEmail1">Avaliação 3:</label>
    <input type="text" class="form-control" name="nota3">
  </div>
  
    
  <button type="submit" class="btn btn-primary">Cadastrar nota</button>
</form>
      
        </div>   
       <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>