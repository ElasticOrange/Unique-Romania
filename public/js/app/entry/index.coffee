goto_step = (number)->
    # Show the content
    $('[data-step]').addClass('hidden')
    $('[data-step]').filter("[data-step=#{number}]").removeClass('hidden')

    # Move the progress bar
    $('.progress-bar').width("#{(number-1)*33}%")

    # Color the icons properly
    $("[data-progress_icons]").children().removeClass('glyph-progress-active').addClass('glyph-progress-inactive')
    for i in [0..number-1]
        $("[data-progress_icons] :nth(#{i})").removeClass('glyph-progress-inactive').addClass('glyph-progress-active')

    console.log "Step #{number}"

$(document).ready ()->
    goto_step(1)

    # Set events on prev/next buttons
    $('[data-goto_step]').click (e)->
        e.preventDefault()

        step_to = $(@).attr('data-goto_step')
        goto_step(step_to)

    true
