@extends('layout.master')

@section('content')
    @include('layout.header')

    <!-- static rows -->
    <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="/img/buble-red-head.png"/>
            <h2 class="title-second">Cum vad altii Romania</h2>
            <p class="content-second"></p>
        </div>
        <div class="col-xs-4">
            <img class="prize-reminder" src="/img/logo-camera.png"/>
        </div>
    </div>

    <div class="row background-grey">
        <div class="line-break line-break-space-second"></div>
    </div>

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

    <form action="/entry" method="post">
        <!--text upload section-->
        <div class="hidden" data-step="1">
            <div class="row background-grey">
                <div class="col-xs-12">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <h2 class="title-second ">Povesteşte ce este unic în România prin exemple din jurul tău.</h2>
                </div>
                <div class="margins">
                    <p class="content-second">La final, bicicleta Pegas poate fi a ta.</p>
                </div>
                <div class="col-xs-11">
                    <textarea name="article" class="margins nuformcontrol form-control" rows="4"></textarea>
                </div>
            </div>

            <div class="row background-grey">
                <div class="col-xs-4 col-xs-offset-4 align-center">
                    <a href="#" class="btn btn-danger btn-block" data-goto_step="2">Inainte un pas</a>
                </div>
            </div>
        </div>

        <!--photo upload section-->
        <div class="hidden" data-step="2">
            <div class="row background-grey">
                 <div class="col-xs-12">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <div class="">
                        <h2 class="title-second">Arată ce este unic în România prin intermediul fotografiilor</h2>
                        <p class="content-second">La final, bicicleta Pegas poate fi a ta.</p>
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
                </div>
            </div>
            <!--that image-end-->
            <div class="row background-grey">
                    <div class="col-xs-4 button-incarca-foto">
                    <a href="#" class="btn btn-default" data-upload_image="true">Incarca fotografii..</a>
                </div>
            </div>
            <div class="row background-grey">
                <div class="col-xs-2 col-xs-offset-4 margin-progressbar-top">
                    <a href="#" class="btn btn-danger " data-goto_step="1">Inapoi un pas</a>
                </div>
                <div class="col-xs-2 margin-progressbar-top">
                    <a href="#" class="btn btn-danger  " data-goto_step="3">Inainte un pas</a>
                </div>
            </div>
        </div>
        <!--end photo upload section-->

        <!--video upload section-->
        <div class="hidden" data-step="3">
            <div class="row background-grey">
                 <div class="col-xs-12">
                    <img class="bubble" src="/img/buble-red-head.png"/>
                    <h2 class="title-second">Arată ce este unic în România prin intermediul materialelor video realizate</h2>
                    <p class="content-second">La final, bicicleta Pegas poate fi a ta.</p>
                </div>
                 <div class="row">
                    <div class="col-xs-8  col-xs-offset-2 margin-progressbar-top">
                        <div class="input-group">
                            <input type="hidden" name="video" value="" />
                            <input type="text" class="form-control" data-video_link="true" />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" data-video_load="true">Incarca</button>
                            </span>
                        </div>
                    </div>
                </div>

                <script type="text/template" id="video_template">
                    <iframe width="460" height="263" src="//www.youtube.com/embed/<%= video_id %>" frameborder="0" allowfullscreen></iframe>
                </script>

                <div class="col-xs-12 margin">
                    <div class="col-xs-8 col-xs-offset-2" data-video_container="true">
                    </div>
                </div>
                <div class="">
                    <div class="col-xs-2 col-xs-offset-4 margin-progressbar-top">
                        <a href="#" class="btn btn-danger " data-goto_step="2">Inapoi un pas</a>
                    </div>
                    <div class="col-xs-2 margin-progressbar-top">
                        <a href="#" class="btn btn-danger  " data-goto_step="4">Inainte un pas</a>
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
                    <h2 class="title-second">Inregistreaza-te si gastiga</h2>
                </div>
            </div>
            <div class="row row background-grey">
                <div class="col-xs-6 input-group margin-data-entry">
                    <span class="input-group-addon">Nume</span>
                    <input type="text" class="form-control" name="name" placeholder="Ex: Ion">
                </div>
            </div>

            <div class="row row background-grey">
                <div class="col-xs-6 input-group margin-data-entry">
                    <span class="input-group-addon">E-mail</span>
                    <input type="text" class="form-control" name="email" placeholder="Ex: Ion@gmail.com">
                </div>
            </div>
            <div class="row row background-grey">
                <div class="col-xs-6 input-group margin-data-entry">
                    <span class="input-group-addon">Telefon</span>
                    <input type="text" class="form-control" name="phone" placeholder="Ex: xx xx xxxx xxxx">
                </div>
            </div>
            <div class="row background-grey">
                <div class="checkbox margin-data-entry">
                    <label>
                        <input type="checkbox"> Sunt de Acord
                    </label>
                </div>
            </div>
            <div class="row background-grey">
                <div class="col-xs-2 col-xs-offset-4 margin-progressbar-top">
                    <a href="#" class="btn btn-danger " data-goto_step="3">Inapoi un pas</a>
                </div>
                <div class="col-xs-2 margin-progressbar-top">
                    <button href="#" class="btn btn-danger">Inainte un pas</button>
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
