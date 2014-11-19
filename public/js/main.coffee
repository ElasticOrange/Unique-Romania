$(document).ready ()->
    setInterval \
        ()->
            FB.Canvas.setSize()
        , 1000
