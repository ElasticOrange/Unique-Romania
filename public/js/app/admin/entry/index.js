
/*
$(document).ready(function()
{
    $('[data-form_approve=true]').submit(function(e){
        e.preventDefault();

        var p = {
            id: $(this).find('[name=id]').val()
        };

        $.ajax({
            url: $(this).attr('action')
            , type: $(this).attr('method')
            , data: p
            , complete: function(s, t){
                if (s.responseJSON.status == 'OK')
                {
                    $("[data-id=" + s.responseJSON.id + "]").remove()
                }
            }
            , content: 'json'
        });
    });
});
 */
$(document).ready(function() {
  return $('[data-form_approve=true]').submit(function(e) {
    var p;
    e.preventDefault();
    p = {
      id: $(this).find('[name=id]').val()
    };
    return $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      data: p,
      complete: function(s) {
        if (s.responseJSON.status === 'OK') {
          return $("[data-id=" + s.responseJSON.id + "]").remove();
        }
      },
      content: 'json'
    });
  });
});
