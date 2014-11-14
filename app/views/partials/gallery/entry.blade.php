    <!-- User row -->
    <div data-user_row="{{ $entry->_id }}" class="row background-grey hand">
        <div class="col-xs-2">
            <img class="user-photo margin-full" src="https://graph.facebook.com/{{ $entry['user']['facebook_id'] }}/picture?type=normal"/>
        </div>
            <h3 class="col-xs-6 username-title">{{ $entry['user']['name'] }}</h3>
        <div class="col-xs-4">
            <!-- Article icon -->
            @if(!empty($entry->article['title']) or !empty($entry->article['content']))
                <span class="glyph glyphicon glyphicon-pencil"></span>
            @else
                <span class="glyph glyph-disabled glyphicon glyphicon-pencil"></span>
            @endif

            <!-- Pictures icon -->
            @if(count($entry->pictures))
                <span class="glyph glyphicon glyphicon-camera"></span>
            @else
                <span class="glyph glyph-disabled glyphicon glyphicon-camera"></span>
            @endif

            <!-- Video icon -->
            @if(!empty($entry->video))
                <span class="glyph glyphicon glyphicon-film"></span>
            @else
                <span class="glyph glyph-disabled glyphicon glyphicon-film"></span>
            @endif
            <span class="glyph glyph-red glyphicon glyphicon-chevron-down margin-btns btn-dropdown"></span>
        </div>
    </div>

    <!-- The dropdown -->
    <div class="user-hide" data-user_content="{{ $entry->_id }}">
        @if(!empty($entry->article['title']) or !empty($entry->article['content']))
            <div class="row background-grey-dropdown">
                <div class="col-xs-12">
                    <img class="bubble" src="img/buble-red-head.png"/>
                    <h2 class="title-second">Cum vad eu ?</h2>
                    <p class="content-second">{{ $entry->article['content'] }}</p>
                </div>
            </div>
        @endif

        @if(count($entry->pictures))
            <!-- Galeria Foto -->
            <div class="row background-grey-dropdown">
                <div class="col-xs-12">
                    <img class="bubble" src="img/buble-red-head.png"/>
                    <h2 class="title-second">Galerie Poze</h2>
                </div>
            </div>

            <div class="row background-grey-dropdown">
                <div class="col-xs-12 margins">
                    @foreach($entry->pictures as $picture)
                        <a class="fancybox" rel="{{ $entry->_id }}" href="{{ url('/entry/big-image/'. $picture) }}">
                            <img src="{{ url('/entry/small-image/'. $picture) }}" class="col-xs-4 example-pic" />
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        @if(!empty($entry->video))
            <!-- Galeria Video -->
            <div class="row background-grey-dropdown">
                <div class="col-xs-12">
                    <img class="bubble" src="img/buble-red-head.png"/>
                    <h2 class="title-second">Galerie Video</h2>
                </div>

                <div class="row">
                    <div class="col-xs-12 example-vid" >
                        <iframe class="center-block" width="640" height="360" src="{{ $entry->video }}" frameborder="0" allowfullscreen="true" ></iframe>
                    </div>
                </div>
            </div>
            <!-- /Galeria Video -->
        @endif
    </div>

    <div class="row">
        <div class="background-red">
            <div class="line-break"></div>
        </div>
    </div>

