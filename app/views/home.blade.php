@extends('layout.master')

@section('content')
    <div class="row position-relative">
        <img src="img/Unique-romania.png"/>
        <h1 class="title-main">Ştiu o poveste</h1>
    </div>

    <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="img/buble-red-head.png"/>
            <h2 class="title-second">Ştiu o poveste</h2>
            <p class="content-second">...a unui loc special, a unui om frumos, a unui lucru care ne inspiră.
            <p class="content-second">În fiecare zi, pas cu pas, descoperim locuri unice în jurul nostru şi oameni speciali, pe care dorim să îi cunoaştem îndeaproape. Cel mai frumos lucru în a descoperi este acela de a împărtăşi cu ceilalţi. Alături de voi, vrem să descoperim locuri unice şi fascinante din România şi poveşti reale despre oameni frumoşi şi pasiunile lor.</p>
        </div>
        <div class="col-xs-4">
            <img class="logo" src="img/logo.png"/>
        </div>
    </div>

    <div class="row background-red">
        <div class="col-xs-8">
            <img class="bubble" src="img/buble-white-head.png"/>
            <h2 class="title-second text-white">Premiul final</h2>
            <p class="content-second text-white">Trimiteţi-ne poveştile pe care le-aţi descoperit şi la finalul călătoriei noastre, trei dintre voi vor primi ca premiu un echipament de iarnă pentru a pleca în vacanţă pregătiţi pentru destinaţiile speciale, pe care doriţi să le descoperiţi mai departe. Puteţi povesti despre locurile unice sau oamenii frumoşi prin texte, fotografii sau video-uri, voi alegeţi! Noi vom selecta câştigătorul care ne impresionează cel mai mult, din fiecare categorie. Alege-ţi categoria preferată şi uimeşte-ne!</p>
            <p class="content-second text-white">Mult succes!</p>
        </div>
        <div class="col-xs-4">
            <img class="prize" src="img/logo-camera.png"/>
        </div>

    </div>
    <div class="row background-red">
        <div class="col-xs-12 align-center">
            <a href="/endorser-gallery" class="btn btn-default btn-lg button-launch text-white">Intră în aplicaţie</a>
        </div>
    </div>
    <div class="row background-red">
        <div class="col-xs-4 text-white pull-right"><br/><br/><br/></div>
    </div>
    <div class="row background-red">
        <div class="col-xs-2 text-white pull-right">
            <a href="#" class="link-white">Regulament</a>
        </div>
    </div>
    <div class="row background-red">
        <div class="col-xs-4 text-white pull-right"><br/></div>
    </div>
@stop
