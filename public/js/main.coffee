$ ->
    # Gallery page
    user_row_click = ()->
        $user_content = $(@).next()

        if $user_content.is(':visible')
            $user_content.find('.bubble').hide()
            $user_content.slideUp 400, ()->
                true
        else
            $user_content.slideDown 400, ()->
                $user_content.find('.bubble').fadeIn()

    # Open and close user row
    $('[data-userrow=true]').click user_row_click

    # Hide all user bubbles
    $('[data-entries=true]').find('.bubble').hide()
