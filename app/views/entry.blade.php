@extends('layout.master')

@section('content')
    @include('layout.header')

    <!-- static rows -->
    <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="/img/buble-red-head.png"/>
            <h2 class="title-second">Cum vad altii Romania</h2>
            <p class="content-second">Reminder cu premiul pe care il poti castiga daca urci content</p>
        </div>
        <div class="col-xs-4">
            <img class="prize-reminder" src="/img/logo-camera.png"/>
        </div>
    </div>

    <div class="row background-grey">
        <div class="line-break line-break-space"></div>
    </div>

    <div class="row background-grey">
        <div class="col-xs-12 margin-progressbar-top ">
            <div class="progress margin-progress-bar nuheight">
                <div class="progress-bar nuprogress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="margins" data-progress_icons="true">
                <span class="glyph-progress glyph-progress-active glyphicon glyphicon-pencil"></span>
                <span class="glyph-progress glyph-progress-inactive glyphicon glyphicon-camera glyph-space-camera"></span>
                <span class="glyph-progress glyph-progress-inactive glyphicon glyphicon-film glyph-space-film"></span>
                <span class="glyph-progress glyph-progress-inactive glyphicon glyphicon-user glyph-space-user"></span>
            </div>
        </div>
    </div>
    <!-- static rows -->

    <!--text upload section-->
    <div class="hidden" data-step="1">
        <div class="row background-grey">
            <div class="col-xs-12">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Povesteste experienta ta</h2>
            </div>
            <div class="col-xs-10">
                <textarea class="margins nuformcontrol form-control" rows="4">...</textarea>
            </div>
        </div>
        <div class="row background-grey">
            <div class="col-xs-4 col-xs-offset-4 align-center">
                <a href="#" class="btn btn-danger btn-block btn-md ">Inainte un pas</a>
            </div>
        </div>
    </div>

    <!--photo upload section-->
    <div class="hidden" data-step="2">
        <div class="row background-grey">
             <div class="col-xs-8">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Arata ce ai vazut</h2>
            </div>
        </div>
        <!--that image-->
        <div class="row background-grey">
            <div class="col-xs-12 margin">
                <div class="col-xs-4 hand example-pic">
                    <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" />
                    <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
                </div>
                <div class="col-xs-4 hand example-pic">
                    <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" />
                    <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
                </div>
                <div class="col-xs-4 hand example-pic">
                    <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" />
                    <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
                </div>
                <div class="col-xs-4 hand example-pic">
                    <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" />
                    <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
                </div>
                <div class="col-xs-4 hand example-pic">
                    <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" />
                    <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
                </div>
            </div>
        </div>
        <!--that image-end-->
        <div class="row background-grey">
                <div class="col-xs-4 col-xs-offset-5">
                <a href="#" class="btn btn-default btn-md">Incarca...</a>
            </div>
        </div>
        <div class="row background-grey">
            <div class="col-xs-2 col-xs-offset-4 margin-progressbar-top">
                <a href="#" class="btn btn-danger btn-md">Inapoi un pas</a>
            </div>
            <div class="col-xs-2 margin-progressbar-top">
                <a href="#" class="btn btn-danger btn-md ">Inainte un pas</a>
            </div>
        </div>
    </div>
    <!--end photo upload section-->

    <!--video upload section-->
    <div class="hidden" data-step="3">
        <div class="row background-grey">
             <div class="col-xs-8">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Arata un film</h2>
            </div>

             <div class="row">
                <div class="col-xs-8  col-xs-offset-2 margin-progressbar-top">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Incarca</button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 margin">
                <div class="col-xs-8 col-xs-offset-2">
                    <iframe width="460" height="263" src="//www.youtube.com/embed/KRXn7dfnmW8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="trash">
                        <span class="glyph-trash glyphicon glyphicon-trash"></span>
                    </div>
            </div>


            <div class="row">
                <div class="col-xs-2 col-xs-offset-4 margin-progressbar-top">
                    <a href="#" class="btn btn-danger btn-md">Inapoi un pas</a>
                </div>
                <div class="col-xs-2 margin-progressbar-top">
                    <a href="#" class="btn btn-danger btn-md ">Inainte un pas</a>
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
                <input type="text" class="form-control" placeholder="Ex: Ion">
            </div>
        </div>

        <div class="row row background-grey">
            <div class="col-xs-6 input-group margin-data-entry">
                <span class="input-group-addon">E-mail</span>
                <input type="text" class="form-control" placeholder="Ex: Ion@gmail.com">
            </div>
        </div>
        <div class="row row background-grey">
            <div class="col-xs-6 input-group margin-data-entry">
                <span class="input-group-addon">Telefon</span>
                <input type="text" class="form-control" placeholder="Ex: xx xx xxxx xxxx">
            </div>
        </div>
        <div class="row row background-grey">
            <div class="col-xs-6 input-group margin-data-entry">
                <span class="input-group-addon">Mobil</span>
                <input type="text" class="form-control" placeholder="Ex: 07xx xxx xxx">
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
                <a href="#" class="btn btn-danger btn-md">Inapoi un pas</a>
            </div>
            <div class="col-xs-2 margin-progressbar-top">
                <a href="#" class="btn btn-danger btn-md ">Inainte un pas</a>
            </div>
        </div>
    </div>
    <!--Personal data-->

    @include('layout.footer')
@stop

@section('js')
    <script src="/js/app/entry/index.js"></script>
@stop
