window.onload = init;

function init() {
  
  var arquivo      = document.getElementById('arquivo');
  arquivo.onchange = carregarImagem;  
}

/* Método complexo
function carregarImagem() {
  
  var f         = this.files[0];
  var reader    = new FileReader();         
  reader.onload = (function(theFile) {
                    return function(e) {
                      document.getElementById('previewImg').innerHTML = 
                        ['<img src="', e.target.result,'" title="', theFile.name, '">'].join('');
                    };
                  })(f);
           
  reader.readAsDataURL(f);
}
*/

//Método simples
function carregarImagem() {
  
  var arquivo   = this.files[0];  
  var reader    = new FileReader();    
  reader.onload = mostrarImagem;
  reader.readAsDataURL(arquivo);
}

function mostrarImagem(evento) {
  
  var previewImg       = document.getElementById('previewImg');  
  var tagImagem        = '<img src="' + evento.target.result + '">';    
  previewImg.innerHTML = tagImagem;
}
