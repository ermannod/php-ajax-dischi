var $ = require('jquery');

const Handlebars = require("handlebars");


$(document).ready(function(){
  var html_template = $('#music-template').html();
  var template_function = Handlebars.compile(html_template);

  $.ajax({
    url: 'music.php',
    method: 'GET',
    dataType: 'json',
    success: function(data){
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        var album = data[i];
        console.log(album);
        var context = {
          poster: album.poster,
          title: album.title,
          author: album.author,
          year: album.year
        } // end context

        var albums = template_function(context);
        $('.container').append(albums);
      }// end for
    },
    error: function(){
      alert('error');
    }
  }) // end ajax

}); // end DOM
