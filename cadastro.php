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
  <strong>Etapa 1: </strong>Digite seu nome completo, CEP,número residencial, telefone, E-mail, disciplina desejada e clique em "Busca CEP"
</div>
            <div class="container">
                <form method="post" action="cep.php" style="align-items: center">
        <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CEP:</label>
    <input type="text" class="form-control" name="cep">
  </div>
    
  <div class="form-group">
    <label for="exampleInputPassword1">Número:</label>
    <input type="text" class="form-control" name="numero">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Telefone:</label>
    <input type="text" class="form-control" name="telefone">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">E-Mail:</label>
    <input type="mail" class="form-control" name="email">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Rua:</label>
    <input type="text" class="form-control" name="rua" disabled="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Bairro:</label>
    <input type="text" class="form-control" name="bairro" disabled="">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Cidade:</label>
    <input type="text" class="form-control" name="cidade" disabled="">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Estado:</label>
    <input type="text" class="form-control" name="estado" disabled="">
  </div>
     <div>
    <select name="disciplina">
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
  <button type="submit" class="btn btn-primary">Busca CEP</button>
</form>
      
        </div>   
       <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>