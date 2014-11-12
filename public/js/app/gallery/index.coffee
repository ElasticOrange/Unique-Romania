$(document).ready ()->
    # Close row
    user_row_close = ($user_row, $user_content)->
        $user_row.find('.btn-dropdown').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down')

        $user_content.find('.bubble').hide()
        $user_content.slideUp 400, ()->
            $user_row.addClass('background-grey').removeClass('background-grey-dropdown')
            true

    # Open row
    user_row_open = ($user_row, $user_content)->
        $user_row.find('.btn-dropdown').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up')

        $user_row.addClass('background-grey-dropdown').removeClass('background-grey')

        $user_content.slideDown 400, ()->
            $.scrollTo($user_row, 400)
            $user_content.find('.bubble').fadeIn()

    # Close all except for one
    user_row_close_all = (except)->
        for duc in $('[data-user_content]:visible')
            $duc = $(duc)
            if $duc.attr('data-user_content') is except
                continue

            $dur = $("[data-user_row=#{$duc.attr('data-user_content')}]")
            user_row_close($dur, $duc)

    # Gallery user row open/close
    user_row_click = ()->
        $user_row = $(@)
        $user_content = $("[data-user_content=#{$(@).attr('data-user_row')}]")

        user_row_close_all($(@).attr('data-user_row'))

        if $user_content.is(':visible')
            user_row_close $user_row, $user_content
        else
            user_row_open $user_row, $user_content

    # Open and close user row
    $('body').on 'click', '[data-user_row]', user_row_click

    # Hide all user bubbles
    $('[data-entries=true]').find('.bubble').hide()

    # Enable fancybox on user pictures
    $('.fancybox').fancybox({type:'image'})


    ###
    # Infinite scroll
    ###
    # The object where status is saved
    infinite_scroll =
        finished: false
        loading: false
        page: 0
        search_term: ''

    # Search
    search_do = (e)->
        e.preventDefault()
        infinite_scroll =
            finished: false
            loading: false
            page: 0
            search_term: $('#search').val()

        $('[data-entries=true]').empty()
        infinite_scroll_load()

        console.log infinite_scroll
        true

    $('#search_button').click search_do
    $('#search_form').submit search_do

    # Show loading
    infinite_scroll_loading_show = ()->
        $('[data-loading]').show()
        true

    # Hide loading
    infinite_scroll_loading_hide = ()->
        $('[data-loading]').hide()
        true

    # Do the load
    infinite_scroll_load = ()->
        if infinite_scroll.loading
            console.log 'Already loading, wait...'
            return false

        if infinite_scroll.finished
            console.log 'Finished loading all the data'
            return false

        infinite_scroll.loading = true

        infinite_scroll_loading_show()
        $.get \
            "/gallery/page/#{infinite_scroll.page}/#{infinite_scroll.search_term}"
            , (s, t)->
                # Go to the next page
                infinite_scroll.page++

                # Mark loading false
                infinite_scroll.loading = false

                # Hide the loading
                infinite_scroll_loading_hide()

                # Add content
                $('[data-entries=true]').append(s.html)

                # If there is no data return mark as finished loading
                if s.html is ''
                    infinite_scroll.finished = true

                console.log 'Response is here'
                console.log infinite_scroll
            , 'json'

    # Call the first load
    infinite_scroll_load()

    # Infinite load event
    $(window).scroll ()->
        factor = 300
        enable = ($(window).scrollTop() + $(window).height()) > ($(document).height() - factor)
        if enable
            infinite_scroll_load()
