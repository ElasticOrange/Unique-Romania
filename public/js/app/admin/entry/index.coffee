###
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
###
$(document).ready ()->
    $('[data-form_approve=true]').submit (e)->
        e.preventDefault()

        p = {
            id: $(@).find('[name=id]').val()
        }

        $.ajax {
            url: $(@).attr('action')
            type: $(@).attr('method')
            data: p
            complete: (s)->
                if s.responseJSON.status is 'OK'
                    $("[data-id=#{s.responseJSON.id}]").remove()
            content: 'json'
        }

