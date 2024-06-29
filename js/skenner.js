var btn1 = document.querySelector("#mostrarcampo");
btn1.addEventListener('click',function(e){
   var campo = document.getElementById('contato');
var texto = campo.value;
  
  var dados = texto;
  
  $.ajax({
    url: 'delete.php',
    type: 'POST',
    data: {username: texto},
    success: function(result){
      // Retorno se tudo ocorreu normalmente
    },
    error: function(jqXHR, textStatus, errorThrown) {
      // Retorno caso algum erro ocorra
    }
  });
 });