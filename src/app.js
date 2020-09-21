let $ = require('jquery');

$(document).ready(function(){
  $.ajax(
    {
      'url': 'http://localhost/php-ajax-dischi/server.php',
      'method': 'GET',
      'success': function(risposta){

          printData(risposta);
      },
      'error': function(){
        alert('Errore');
      }
    }
  );
});

function printData(data){

  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for(var i = 0; i< data.length; i++){

    var context = {
      'img': data[i].poster,
      'titolo': data[i].title,
      'autore': data[i].author,
      'anno': data[i].year,
    };

    var html = template(context);
    $('.cds-container').append(html);

  }

}
