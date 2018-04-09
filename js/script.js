$(document).ready(function(){

  var nb_article = $('.nb_article'),
  total = $('.total'),destroy = $('span.delete a'),update_form = $('span.update_form form');

  $(update_form).each(function(){
    $(this).submit(function(){

    });
  });

  $(destroy).each(function(){
    $(this).on('click',function(){

      if(confirm('confimez-vous la suppression ? ')){

        var url = $(this).attr('href');

        tr = $(this).closest('tr');

        $.getJSON(url,function(data){
          if(data.success){
            $(tr).fadeOut();
            $(nb_article).text(data.nb_article);
            $(total).text(data.total);
          }
        });
      }

      return false;
    });
  });
});
