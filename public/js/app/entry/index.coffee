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

    # Set the on click event of upload image button to the real input file element
    $('[data-upload_image=true]').click (e)->
        e.preventDefault()
        $('#image_upload').click()

    # Set the async fileupload
    $('#image_upload').fileupload \
        dataType: 'json'
        , done: (e, data)->
            picture_template = _.template($('#picture_template').html())
            picture_html = picture_template \
                picture_url: data.result.name
            $('[data-picture_container=true]').append(picture_html)
            # data.result.name
            true

    remove_image = (e)->
        if confirm('Esti sigur ca vrei sa stergi poza?')
            e.preventDefault()
            $(@).parent().remove()

    $('body').on 'click', '.trash', remove_image
