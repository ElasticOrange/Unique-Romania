@extends('layout.master')

@section('content')
    @include('layout.header')

    <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="/img/buble-red-head.png"/>
            <h2 class="title-second">Unic în România prin ochii voştri</h2>
            <p class="content-second">Am pornit şi noi în căutarea unor destinaţii sau oameni unici în România. Indiferent că am mers înspre vest sau est sau de la nord la sud, am găsit în orice loc în care am ajuns oameni deosebiţi, cu iniţiative pe care ne dorim să le facem auzite. Iată descoperirile noastre! Acum este rândul vostru!</p>
            <p class="content-second">Ce este unic în România pentru voi?</p>
        </div>


        <div class="col-xs-4 align-center">
            <a href="/entry" class="btn btn-danger btn-md button-arata-ne text-white">Arata-ne cum vezi tu</a>
        </div>

    </div>

    <div class="row">
        <div class="background-red">
            <div class="line-break line-break-space"></div>
        </div>
    </div>

    <div class="row background-grey">
        <div class="col-xs-12">
            <form id="search_form">
                <div class="input-group input-search center">
                    <input class="form-control" type="text" id="search" placeholder="Cauta dupa nume">
                    <span class="input-group-btn">
                        <button class="btn btn-default" id="search_button" type="button">
                            <div class="glyphicon glyphicon-search"></div>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <div data-entries="true">
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
        <div class="col-xs-4 pull-right link-margin">
            <a href="http://www.canon.ro" class="link-black link-size">www.canon.ro</a>
            <span>|</span>
            <a href="#" class="link-black link-size">Regulament</a>
        </div>
    </div>

@stop

@section('js')
    <script src="/js/app/gallery/index.js"></script>
@stop
