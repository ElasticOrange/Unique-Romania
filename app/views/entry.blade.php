@extends('layout.master')

@section('content')
    @include('layout.header')

    <!-- static rows -->
    <div class="row background-grey">
        <div class="col-xs-12 margin-progressbar-top ">
            <div class="progress margin-progress-bar nuheight">
                <div class="progress-bar nuprogress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="margins" data-progress_icons="true">
                <span class="hand glyph-progress glyph-progress-active glyphicon glyphicon-pencil" data-goto_step="1"></span>
                <span class="hand glyph-progress glyph-progress-inactive glyphicon glyphicon-camera glyph-space-camera" data-goto_step="2"></span>
                <span class="hand glyph-progress glyph-progress-inactive glyphicon glyphicon-film glyph-space-film" data-goto_step="3"></span>
                <span class="hand glyph-progress glyph-progress-inactive glyphicon glyphicon-user glyph-space-user" data-goto_step="4"></span>
            </div>
        </div>
    </div>
    <!-- static rows -->

    <!-- -->
    <form action="/entry/image" method="post" enctype="multipart/form-data">
        <input type="file" class="moveout" name="picture" id="image_upload" multiple />
    </form>

    <form action="/entry" method="post" data-form_entry="true">
        <!--text upload section-->
        <div class="hidden" data-step="1">
            <div class="row background-grey">
                <div class="col-xs-12">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <h2 class="title-second ">Completează cu descrierile tale despre un loc sau despre un om special.</h2>
                </div>
                <div class="col-xs-11">
                    <textarea name="article" class="margins nuformcontrol form-control" rows="4">{{ @$entry->article['content'] }}</textarea>
                </div>
            </div>

            <div class="row background-grey">
                <div class="col-xs-4 col-xs-offset-4 align-center">
                    <a href="#" class="btn btn-danger btn-block" data-goto_step="2">Mergi mai departe</a>
                </div>
            </div>
        </div>

        <!--photo upload section-->
        <div class="hidden" data-step="2">
            <div class="row background-grey">
                 <div class="col-xs-12">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <div class="">
                        <h2 class="title-second">Arată-ne ce este special prin intermediul fotografiilor pe care le-ai făcut!</h2>
                    </div>
                </div>
            </div>
            <!--that image-->
            <script type="text/template" id="picture_template">
                <div class="col-xs-4 hand example-pic">
                    <input type="hidden" name="pictures[]" value="<%= picture_url %>" />
                    <img src="/entry/small-image/<%= picture_url %>" />
                    <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
                </div>
            </script>
            <div class="row background-grey">
                <div class="col-xs-12 margin" data-picture_container="true">
                    @if(isset($entry->pictures))
                        @foreach($entry->pictures as $picture)
                            <div class="col-xs-4 hand example-pic">
                                <input type="hidden" name="pictures[]" value="{{ $picture }}" />
                                <img src="/entry/small-image/{{ $picture }}" />
                                <div class="trash">
                                    <span class="glyph-trash glyphicon glyphicon-trash"></span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!--that image-end-->
            <div class="row background-grey">
                    <div class="col-xs-4 button-incarca-foto">
                    <a href="#" class="btn btn-default" data-upload_image="true">Încarcă fotografii</a>
                </div>
            </div>
            <div class="row background-grey">
                <div class="col-xs-3 col-xs-offset-3 margin-progressbar-top">
                    <a href="#" class="btn btn-danger " data-goto_step="1">Mergi înapoi un pas</a>
                </div>
                <div class="col-xs-2 margin-progressbar-top">
                    <a href="#" class="btn btn-danger  " data-goto_step="3">Mergi mai departe</a>
                </div>
            </div>
        </div>
        <!--end photo upload section-->

        <!--video upload section-->
        <div class="hidden" data-step="3">
            <div class="row background-grey">
                 <div class="col-xs-12">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <h2 class="title-second">Completeză mai departe si trimite-ne materialele tale video!</h2>
                </div>



                <div class="row">
                    <div class="col-xs-8  col-xs-offset-2 margin-progressbar-top">
                        <div class="align-center">
                            <p class="content-second">Încarcă povestea ta video pe <b>canalul tău</b> de <b>YouTube</b> şi pune linkul aici! În cel mai scurt timp va intra în competiţie!</p>
                        </div>
                        <div class="input-group">
                            <input type="hidden" name="video" value="{{@$entry->video}}" />
                            <input type="text" class="form-control" data-video_link="true" placeholder="https://www.youtube.com/?gl=RO&hl=ro"  />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" data-video_load="true">Încarcă</button>
                            </span>
                        </div>
                    </div>
                </div>

                <script type="text/template" id="video_template">
                    <iframe width="460" height="263" src="//www.youtube.com/embed/<%= video_id %>" frameborder="0" allowfullscreen></iframe>
                </script>

                <div class="col-xs-12 margin">
                    <div class="col-xs-8 col-xs-offset-2" data-video_container="true">
                        @if(!empty($entry->video))
                            <iframe width="460" height="263" src="{{$entry->video}}" frameborder="0" allowfullscreen></iframe>
                        @endif
                    </div>
                </div>
                <div class="">
                    <div class="col-xs-3 col-xs-offset-3 margin-button-top">
                        <a href="#" class="btn btn-danger " data-goto_step="2">Mergi înapoi un pas</a>
                    </div>
                    <div class="col-xs-2 margin-button-top">
                        <a href="#" class="btn btn-danger  " data-goto_step="4">Mergi mai departe</a>
                    </div>
                </div>
            </div>
        </div>
        <!--video upload section-->

        <!--Personal data-->
        <div class="hidden" data-step="4">
            <div class="row background-grey">
                <div class="col-xs-8">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <h2 class="title-second">Înregistrează-te şi câştigă!</h2>
                </div>
            </div>
            <div class="row row background-grey">
                <div class="col-xs-6 input-group margin-data-entry">
                    <span class="input-group-addon">Nume</span>
                    <input type="text" class="form-control" name="name" placeholder="Ex: Andrei" value="{{ @$entry->name }}">
                </div>
            </div>

            <div class="row row background-grey">
                <div class="col-xs-6 input-group margin-data-entry">
                    <span class="input-group-addon">E-mail</span>
                    <input type="text" class="form-control" name="email" placeholder="Ex: Andrei@gmail.com" value="{{ @$entry->email }}">
                </div>
            </div>
            <div class="row row background-grey">
                <div class="col-xs-6 input-group margin-data-entry">
                    <span class="input-group-addon">Telefon</span>
                    <input type="text" class="form-control" name="phone" placeholder="Ex: 07xx-xxx-xxx" value="{{ @$entry->phone }}">
                </div>
            </div>
            <div class="row background-grey">
                <div class="checkbox margin-data-entry">
                    <label>
                        <input type="checkbox" name="agree"> Sunt de acord cu regulile
                    </label>
                </div>
            </div>
            <div class="row background-grey">
                <div class="col-xs-3 col-xs-offset-3 margin-progressbar-top">
                    <a href="#" class="btn btn-danger " data-goto_step="3">Mergi înapoi un pas</a>
                </div>
                <div class="col-xs-2 margin-progressbar-top">
                    <input type="submit" class="btn btn-danger salveaza-btn" value="Salvează" />
                </div>
            </div>
        </div>
        <!--Personal data-->
    </form>

    @include('layout.footer')
@stop

@section('js')
    <script src="/js/fileupload/jquery.ui.widget.js"></script>
    <script src="/js/fileupload/jquery.iframe-transport.js"></script>
    <script src="/js/fileupload/jquery.fileupload.js"></script>
    <script src="/js/underscore/underscore.min.js"></script>
    <script src="/js/app/entry/index.js"></script>
@stop
