<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Upload</title>
  </head>
  <body>
    <form action='upload.php' method='POST' enctype='multipart/form-data'>
      <p>Título:     <input type='text' name='titulo'><br></p>
     <p> Autor:      <input type='text' name='autor'><br></p>
      <p>Preço:      <input type='text' name='preco'><br></p>
      <p>Categoria: <input type='select' name='categoria'><br></p>
      <p>Imagem:     <input type='file' name='imagem'><br></p>
      <p>Quantidade: <input type='text' name='qtde' value='50'><br></p>
      <input type='submit' name='Cadastrar livro'><br></p>
    </form>
  </body>
</html>
