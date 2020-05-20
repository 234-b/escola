<?php
;
    function getCep($cep){
    $cep=preg_replace('/[^0-9]/','',$cep);
    $url=file_get_contents("http://viacep.com.br/ws/$cep/json/");
    $json=json_decode($url);
    return $json;
    }

$num=rand(1,1000);
?>
<?php if($cep=$_POST["cep"]){ ?>

        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css"> 
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
  <strong>Etapa 2: </strong>Confira seus dados. Se estiverem corretos, clique em "cadastrar". Caso estejam incorretos, clique em "Voltar para a 1ª Etapa".
</div>
            <div class="container">
                <form method="post" action="cadastra.php" style="align-items: center">
       <div class="form-group">
    <label for="exampleInputEmail1">Código:</label>
    <input type="text" class="form-control" name="codigo" value="<?php echo $num;?>">
  </div>             
    
    <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $_POST['nome'];?>">
  </div>
    <?php $endereco=getCep($_POST['cep']);?>
  <div class="form-group">
    <label for="exampleInputPassword1">CEP:</label>
    <input type="text" class="form-control" name="cep" value="<?php echo $endereco->cep;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Número:</label>
    <input type="text" class="form-control" name="numero" value="<?php echo $_POST['numero'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Telefone:</label>
    <input type="text" class="form-control" name="telefone" value="<?php echo $_POST['telefone'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">E-Mail:</label>
    <input type="mail" class="form-control" name="email" value="<?php echo $_POST['email'];?>">
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1">Rua:</label>
    <input type="text" class="form-control" name="rua" value="<?php echo $endereco->logradouro;?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Bairro:</label>
    <input type="text" class="form-control" name="bairro" value="<?php echo $endereco->bairro;?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Cidade:</label>
    <input type="text" class="form-control" name="cidade" value="<?php echo $endereco->localidade;?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Estado:</label>
    <input type="text" class="form-control" name="estado" value="<?php echo $endereco->uf;?>">
  </div>
     
    <div class="form-group">
    <label for="exampleInputPassword1">Disciplina:</label>
    <input type="text" class="form-control" name="disciplina" value="<?php echo $_POST['disciplina'];?>">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a class="btn btn-primary" href="indexcopia.html">Voltar para 1ª Etapa</a>
</form>
      <?php } ?>
        </div>   
       <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
 