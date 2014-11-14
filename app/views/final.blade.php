@extends('layout.master')

@section('content')
    @include('layout.header')
    <div class="hidde">
        <div class="row background-grey">
            <div class="col-xs-12">
                <img class="bubble" src="/img/buble-red-head.png"/>
                <h2 class="title-second">Iti multumim pantru participare</h2>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="line-break"></div>
                </div>
            </div>
        </div>
        <div class="row background-grey">
            <div class="col-xs-8 margin margins">
                <p>Contentul tau va trece printr-un proces de aprobare.</p>
                <p>Vei primii in scurt timp un email de confirmare la adresa de e-mail inscrisa de tine</p>
            </div>
        </div>
        <div class="col-xs-4">
            <a href="/gallery" class="btn btn-danger text-white margin">Afla cum vad altii</a>
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
                <p>Îţi multimim că ai imparasit cu noi povesti despre oameni şi locuri unice. Invită-ţi şi prietenii să participe la concurs.</p>
                <p>Împreună, vom descoperi în toate colţurile ţării ce este unic în România.</p>
            </div>
        </div>
    </div>
    @include('layout.footer')
@stop
