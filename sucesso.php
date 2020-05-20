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
       
      
        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Matéria cadastrada!</h4>
  <p>A matéria que você tentou inserir em nosso sistema foi inserida com sucesso. Se deseja cadastrar outra matéria, clique em "Cadastrar nova matéria".</p>
  <hr>
  <a href="disciplina.php" class="btn btn-primary">Cadastrar nova matéria</a>
</div>  
       <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>