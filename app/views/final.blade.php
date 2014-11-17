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
                <p>Vei primii în scurt timp un email de confirmare la adresa de e-mail înscrisă de tine.</p>
            </div>
        </div>
        <div class="col-xs-6">
            <a href="/gallery" class="btn btn-danger text-white">Poveştile altora...</a>
            <a class="btn btn-danger text-white" data-share="true" href="https://www.facebook.com/dialog/share?app_id={{ Config::get('facebook.app_id') }}&display=popup&href={{ url('/gallery') }}&redirect_uri={{ url('/gallery') }}">Share la prieteni</a>
        </div>
    </div>

    <div class="hidde">
        <div class="row background-grey">
            <div class="col-xs-12">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Felicitari</h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="line-break"></div>
                </div>
            </div>
        </div>
        <div class="row background-grey">
            <div class="col-xs-10 margin margins">
                <p>Îţi multimim că ai imparasit cu noi povesti despre oameni şi locuri speciale. Invită-ţi şi prietenii să participe la concurs. </p>
                <p>Împreună, vom descoperi în toate colţurile ţării ceva special şi deosebit !</p>
            </div>
        </div>
    </div>
    @include('layout.footer')
@stop

@section('js')
    <script src="/js/app/final/index.js"></script>
@stop
