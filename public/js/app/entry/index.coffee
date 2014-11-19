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

    # Set the async image fileupload
    $('#image_upload').fileupload \
        dataType: 'json'
        , done: (e, data)->
            picture_template = _.template($('#picture_template').html())
            picture_html = picture_template \
                picture_url: data.result.name
            $('[data-picture_container=true]').append(picture_html)
            # data.result.name
            true

    # Remove image from page and form
    remove_image = (e)->
        if confirm('Esti sigur ca vrei sa stergi poza?')
            e.preventDefault()
            $(@).parent().remove()

    # Remove image event
    $('body').on 'click', '.trash', remove_image

    # Youtube link to code
    youtube_link_to_id = (url)->
        regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/
        match = url.match(regExp)

        if (match and match[2].length == 11)
            return match[2]
        else
            return false

    # Create embed code
    youtube_embed = ()->
        # Embed the link
        youtube_id = youtube_link_to_id($('[data-video_link=true]').val())
        if youtube_id
            youtube_html = _.template($('#video_template').html())
            $('[data-video_container=true]').html(youtube_html({video_id: youtube_id}))

            # Input value
            $('[name=video]').val("//www.youtube.com/embed/#{youtube_id}")
        else
            $('[data-video_container=true]').html('')

            # Input value
            $('[name=video]').val("")



        true

    # Add video
    $('[data-video_load=true]').click youtube_embed

    # Check the user completed the form properly before posting
    $('[data-form_entry=true]').submit (e)->
        debugger
        if _.isEmpty($('[name=name]').val()) or _.isEmpty($('[name=email]').val()) or _.isEmpty($('[name=phone]').val())
            alert 'Te rugam sa completezi datele tale personale ca sa te putem contacta'
            e.preventDefault()
            return false

        # Check if user added text
        if _.isEmpty($('[name=article]').val())
            added_text = false
        else
            added_text = true

        # Check if user added pictures
        if $('[name="pictures[]"]').length is 0
            added_pictures = false
        else
            added_pictures = true

        # Check if user added video
        if _.isEmpty($('[name=video]').val())
            added_video = false
        else
            added_video = true

        debugger
        # Alert if user did not add anything
        if not added_text and not added_pictures and not added_video
            alert 'Te rugam sa adaugi un articol, poze sau un film pentru a participa la concurs'
            e.preventDefault()
            return false
