@extends('layout.master')

@section('content')
    @include('layout.header')

    <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="/img/buble-red-head.png"/>
            <h2 class="title-second">Cum vad altii Romania</h2>
            <p class="content-second">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu .</p>
        </div>

           <div class="col-xs-4 align-center">
            <a href="#" class="btn btn-danger btn-md button-arata-ne text-white">Arata-ne cum vezi tu</a>
        </div>

    </div>

    <div class="row">
        <div class="background-red">
            <div class="line-break line-break-space"></div>
        </div>
    </div>

    <div class="row background-grey">
        <div class="col-xs-12">
            <div class="input-group input-search center">
                <input class="form-control" type="text" id="search" placeholder="Cauta dupa nume">
                <span class="input-group-btn">
                    <button class="btn btn-default" id="search_button" type="button">
                        <div class="glyphicon glyphicon-search"></div>
                    </button>
                </span>
            </div>
        </div>
    </div>

    <div data-entries="true">
        @foreach($entries as $entry)
            @include('partials.gallery.entry', array('entry' => $entry))
        @endforeach
    </div>

    <!-- square loading things -->
    <div class="row background-grey" data-loading="true">
        <div class="squares">
            <div class="col-xs-4 loading-square loading-square-a1"></div>
            <div class="col-xs-4 loading-square loading-square-a2"></div>
            <div class="col-xs-4 loading-square loading-square-a3"></div>
        </div>
    </div>
    <!-- square loading things-->

    <div class="row background-grey">
        <div class="col-xs-4 pull-right">
            <a href="http://www.canon.ro" class="link-black link-size">www.canon.ro</a>
            <span>|</span>
            <a href="#" class="link-black link-size">Regulament</a>
        </div>
    </div>

@stop

@section('js')
    <script src="/js/app/gallery/index.js"></script>
@stop
