@extends('layout.master')

@section('content')
    @include('layout.header')
    <div class="hidde">
        <div class="row background-grey">
            <div class="col-xs-12">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Îţi mulţumim pentru participare</h2>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="line-break"></div>
                </div>
            </div>
        </div>
        <div class="row background-grey">
            <div class="col-xs-8 margin margins">
                <p>Contentul tău va trece printr-un proces de aprobare.</p>
                <p>Vei primii în scurt timp un e-mail de confirmare la adresa de e-mail înscrisă de tine.</p>
            </div>
        </div>
        <div class="col-xs-6">
            <a href="/gallery" class="btn btn-danger text-white">Poveştile altora</a>
            <a class="btn btn-danger text-white" data-share="true" href="https://www.facebook.com/dialog/share?app_id={{ Config::get('facebook.app_id') }}&display=popup&href={{ url('/gallery') }}&redirect_uri={{ url('/gallery') }}">Share către prieteni</a>
        </div>
    </div>

    <div class="hidde">
        <div class="row background-grey">
            <div class="col-xs-12 marginz">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Felicitări</h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="line-break"></div>
                </div>
            </div>
        </div>
        <div class="row background-grey">
            <div class="col-xs-10 margin margins">
                <p>Îţi mulţuimim că ai impărtăşit cu noi poveşti despre oameni şi locuri speciale.</p>
                <p>Invită-ţi şi prietenii să participe la concurs! Împreună, vom descoperi în toate colţurile ţării ceva special şi deosebit !</p>
            </div>
        </div>
    </div>
    @include('layout.footer')
@stop

@section('js')
    <script src="/js/app/final/index.js"></script>
@stop
