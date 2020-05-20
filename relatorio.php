<?php
    include_once("conexao.php");

    $consulta = "SELECT * FROM pessoa";
    $res=mysqli_query($strcon,$consulta)or die(mysqli_error($strcon));
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
       
      <table border="1">
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>CEP</td>
                <td>Rua</td>
                <td>Número</td>
                <td>Telefone</td>
                <td>E-mail</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>Estado</td>
                <td>Disciplina</td>
                <td>Avaliação 1</td>
                <td>Avaliação 2</td>
                <td>Avaliação 3</td>
                <td>Nota Final</td>
                <td>Status</td>
            </tr>
            <?php while($dado = $res->fetch_array()){ ?>
            <tr>
                <td><?php echo $dado['código'];?></td>
                <td><?php echo $dado['nome'];?></td>
                <td><?php echo $dado['cep'];?></td>
                <td><?php echo $dado['rua'];?></td>
                <td><?php echo $dado['número'];?></td>
                <td><?php echo $dado['telefone'];?></td>
                <td><?php echo $dado['Email'];?></td>
                <td><?php echo $dado['bairro'];?></td>
                <td><?php echo $dado['cidade'];?></td>
                <td><?php echo $dado['estado'];?></td>
                <td><?php echo $dado['Disciplina'];?></td>
                <td><?php echo $dado['nota_1'];?></td>
                <td><?php echo $dado['nota_2'];?></td>
                <td><?php echo $dado['nota_3'];?></td>
                <td><?php echo $dado['nota_final'];?></td>
                <td><?php echo $dado['Situacao'];?></td>
          </tr>
          <?php }?>
        </table>
       <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>