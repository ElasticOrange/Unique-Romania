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
        else
            $('[data-video_container=true]').html('')

        # Input type
        $('[name=video]').val("//www.youtube.com/embed/#{youtube_id}")

        true

    # Add video
    $('[data-video_load=true]').click youtube_embed
