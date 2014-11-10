    <!-- User row -->
    <div data-userrow="true" class="row background-grey hand">
        <div class="col-xs-2">
            <img class="margin-full" src="/img/profile-pic-default.png"/>
        </div>
            <h3 class="col-md-4 username-title">GIGEL</h3>
        <div class="col-md-4 margin-btns">
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

            <!-- Pictures video -->
            @if(count($entry->videos))
                <span class="glyph glyphicon glyphicon-film"></span>
            @else
                <span class="glyph glyph-disabled glyphicon glyphicon-film"></span>
            @endif
            <span class="glyph glyph-red glyphicon glyphicon-chevron-down pull-right btn-dropdown"></span>
        </div>
    </div>

    <!-- The dropdown -->
    <div class="user-hide">
        @if(!empty($entry->article['title']) or !empty($entry->article['content']))
            <div class="row background-grey-dropdown">
                <div class="col-xs-12">
                    <img class="bubble" src="img/buble-red-head.png"/>
                    <h2 class="title-second">{{ $entry->article['title'] }}</h2>
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
                    @for($i = 0 ; $i < count($entry->pictures) ; $i++)
                        <img src="{{ $entry->pictures[$i] }}" class="col-xs-4 example-pic" />
                    @endfor
                </div>
            </div>
        @endif

        @if(count($entry->videos))
            <!-- Galeria Video -->
            <div class="row background-grey-dropdown">
                <div class="col-xs-12">
                    <img class="bubble" src="img/buble-red-head.png"/>
                    <h2 class="title-second">Galerie Video</h2>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                        <span class="arrow hand glyphicon glyphicon-chevron-left pull-right"></span><!-- gliph! -->
                    </div>
                    <div class="col-xs-6 example-vid">
                        <iframe width="470" height="263" src="//www.youtube.com/embed/KRXn7dfnmW8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-xs-1 arrow-right ">
                         <span class="arrow hand glyphicon glyphicon-chevron-right pull-right"></span><!-- gliph! -->
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

