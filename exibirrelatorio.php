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
     
      
    </ul>
  </div>
</nav>
       <div class="alert alert-primary" role="alert">
  Para exibir informações do aluno, informe seu nome e código e clique em<strong>"Consultar".</strong>
</div>
         
            <div class="container">
               
                <form method="post" action="relatorio.php" style="align-items: center">
        <div class="form-group">
    
    
     
            <label for="exampleInputEmail1">Código do aluno:</label>
    <input type="text" class="form-control" name="alunocod">
            <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" name="nome">
        
  </div>
  
    
  <button type="submit" class="btn btn-primary">Cadastrar nota</button>
</form>
      
        </div>   
       <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>