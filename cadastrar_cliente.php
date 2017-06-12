<?php 
  require_once 'conecta_mysql.inc.php';
  $tituloPagina = 'Livraria Power - Cadastro de clientes';
  $cssLocal     = './css/cadastroLivros.css'; //alterar para cadastroclientes
  require_once 'cabecalho.inc.php';   
  require_once 'config_upload.inc.php';  

  //Obtendo os dados do formulário de
  //cadastro de clientes
  foreach ($_POST as $chave => $valor)
    $$chave = $valor;   
  
  
  //Obtendo o último auto-incremento da tabela de clientes para
  //cadastrarmos o próximo cliente
  $result = $mysqli->query(" SELECT AUTO_INCREMENT           " .
                           " FROM  INFORMATION_SCHEMA.TABLES " .
                           " WHERE TABLE_SCHEMA = 'loja'     " .
                           " AND   TABLE_NAME   = 'clientes'   ");
                     
  $dados           = $result->fetch_assoc();
  $contAtual       = $dados['AUTO_INCREMENT'];
     
    //Realizando a inserção no banco de dados
    $sqlInsert = " INSERT INTO CLIENTES (USUARIO, SENHA, NOME, EMAIL, ENDERECO, CIDADE)    " . 
                  " VALUES ('$usuario', '$senha', '$nome', '$email', '$endereco', '$cidade' ) ";
    
    $mysqli->query($sqlInsert);
    
    if ($mysqli->affected_rows > 0) {
      echo "<p>Cadastro realizado com sucesso!</p>";    
      echo "<p><a href='clientes.php'>Cadastrar mais clientes </a></p>";
      echo "<p><a href='logout.php'><em>Logout</em></a></p>";
    }
	
  include_once 'rodape.inc.php';
?>
