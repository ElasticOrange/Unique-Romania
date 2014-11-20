###
$(document).ready ()->
    setTimeout \
        ()->
            FB.Canvas.setSize({height:600});
        , 500

    setInterval \
        ()->
            FB.Canvas.setSize()
        , 1000
###