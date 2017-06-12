<?php 
  require_once 'conecta_mysql.inc.php';
  $tituloPagina = 'Livraria Power - Cadastro de clientes';
  $cssLocal     = './css/livros.css'; // alterar
  $jsLocal      = './js/livros.js'; // alterar
  require_once 'cabecalho.inc.php';   
  
  //Montando consulta de categorias
  $sql    = 'SELECT codigo, categoria FROM CATEGORIAS ORDER BY categoria';  
  $result = $mysqli->query($sql);
  $linhas = $mysqli->affected_rows;
?>
  <h1>
    Cadastro de novo cliente
  </h1>

  <form action  = 'cadastrar_cliente.php' 
        method  = 'POST' 
        enctype = 'multipart/form-data' >
        
    <fieldset>

      <label for='nome'>Nome completo: 
      <input type ='text'  
             id   ='nome'
             class='texto'
             required='true'
             name ='nome'></label>
             
      <label for='email'>E-mail para contato: 
      <input type ='text' 
             id   ='email'
             class='texto'
             required='true'
             name ='email' ></label>   

      <label for='usuraio'>(Usuário máximo de 15 caracteres): 
      <input type ='text' 
             id   ='usuario'
             class='text'
             required='true'
             name ='usuario' ></label>   

      <label for='senha'>(Senha máximo de 15 caracteres): 
            <input type ='password' 
                   id   ='senha'
                   class='password'
                   required='true'
                   name ='senha' ></label>        

      <label for='rep-senha'>Repita sua senha: 
            <input type ='password'  
                   id   ='rep-senha'
                   class='password'
                   required='true'
                   name ='rep-senha'></label>  

<label for='endereco'>Endereço completo: 
      <input type ='text'  
             id   ='endereco'
             class='texto'
             required='true'
             name ='endereco'></label>

<label for='cidade'>Cidade / Estado: 
      <input type ='text'  
             id   ='cidade'
             class='texto'
             required='true'
             name ='cidade'></label>       
             
      <input type='submit' value='Cadastrar novo cliente'>
      
    </fieldset>    
  </form>

  <?php
    include_once 'rodape.inc.php';
  ?>

  </body>
</html>  
    
  