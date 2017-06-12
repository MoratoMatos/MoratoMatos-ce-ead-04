<?php 
  require_once 'conecta_mysql.inc.php';
  require_once 'valida_sessao_admin.inc.php'; 
  $tituloPagina = 'Livraria Banzai - Cadastro de livros';
  $cssLocal     = './css/cadastroLivros.css';
  require_once 'cabecalho.inc.php';   
?>
   <div class='conteudo'>
   <h1>
      Administração do site
    </h1>
    <p>
      <a href='livros.php'>Cadastrar novos livros</a>
    </p>    
    <p>
      <a href='logout.php'>Sair do sistema</a>
    </p>
    </div>
    <?php include 'rodape.inc.php'; ?>
  </body>
</html>
