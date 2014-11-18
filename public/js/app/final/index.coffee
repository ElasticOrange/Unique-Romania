$(document).ready ()->
    $('[data-share=true]').click (e)->
        e.preventDefault()

        window.open \
            $(@).attr('href')
            , 'Share'
            , 'height=200,width=500,toolbar=0,status=0'

        window.location = '/gallery'

