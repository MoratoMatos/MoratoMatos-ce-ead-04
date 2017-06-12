<!-- Cabeçalho -->
    <?php 
      require_once('config.php'); 
      $tituloPagina = 'Livraria Power - Login';
      $cssLocal     = './css/login.css.php';
      require_once 'cabecalho.inc.php'; 
      
       //Incluindo a conexão com o banco de dados
      require_once('conecta_mysql.inc.php');

    ?>  
    <div class='container'>
      <div class='conteudo'>
     <!-- Formulário de login -->
      <div class='login'>
        <form action='login.php' method='POST'>
          <fieldset>
	     <p>
		<h2>Seja bem-vindo à livraria Power!</h2>
	     </p>
          
             <p> Para a sua comodidade, efetue o login : </p>
               
            <p><b id=esp-lin> Usuário: </b><input type='text' 
                     name="usuario" 
                     id='usuario' 
                     required='true'
                     autofocus='true'>
            </p>
            <p><b id=esp-lin>Senha:</b> <input type='password' 
                     name='senha' 
                     id='senha' 
                     required='true'>
	    </p>
         
            <p>
              <input type='checkbox' name='admin' id='admin'>Efetuar <i>login</i> como Administrador</input>
            </p>
            <p>    
              <input type='submit' value='Login'>
            </p>
            <span>
              <a href="./clientes.php">Cadastro de novo usuário</a>
            </span>
          </fieldset>          
        </form>
      </div>
    </div>
</div>
     <!-- Rodapé  -->
    <?php include_once 'rodape.inc.php'; ?>
