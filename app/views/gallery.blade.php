@extends('layout.master')

@section('content')
    @include('layout.header')

    <div class="row background-grey">
        <div class="col-xs-8">
            <p class="content-second-nb">Alături de alţi "povestitori", îţi oferim inspiraţia de care ai nevoie pentru a dezvălui momente şi experienţe care demonstrează că în fiecare colţ de lume există magie şi inspiraţie, dacă ştim unde să căutăm.</p>
           <!-- <p class="content-second">Acum este rândul vostru!</p> -->
        </div>
        <!--
        <div class="col-xs-4 align-center">
            <a href="/entry" class="btn btn-danger btn-md button-arata-ne text-white">Ce poveşti ştiţi voi?</a>
        </div>
        -->
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

   @include ('layout.footer')
@stop

@section('js')
    <script src="/js/app/gallery/index.js"></script>
@stop
