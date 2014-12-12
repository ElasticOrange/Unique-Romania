@extends('layout.master')
@section('content')
    <div class="row position-relative">
        <img src="img/Unique-romania1.png"/>
        <h1 class="title-main">Ştiu o poveste</h1>
        <div class="col-xs-5 content-special">
            <p class="content-second text-right">...a unui loc special, a unui om frumos, a unui lucru care ne inspiră. În fiecare zi, pas cu pas, descoperim locuri unice în jurul nostru şi oameni speciali, pe care dorim să îi cunoaştem îndeaproape. Cel mai frumos lucru în a descoperi este acela de a împărtăşi cu ceilalţi.</p>
        </div>
    </div>


   <!-- <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="img/buble-red-head.png"/>
            <h2 class="title-second">Ştiu o poveste</h2>
            <p class="content-second">...a unui loc special, a unui om frumos, a unui lucru care ne inspiră. În fiecare zi, pas cu pas, descoperim locuri unice în jurul nostru şi oameni speciali, pe care dorim să îi cunoaştem îndeaproape. Cel mai frumos lucru în a descoperi este acela de a împărtăşi cu ceilalţi.</p>
        </div>
        <div class="col-xs-4">
            <img class="logo" src="img/logo.png"/>
        </div>
    </div>-->

    <div class="row background-red">
        <div class="col-xs-8">
            <img class="bubble" src="img/buble-white-head.png"/>
            <h2 class="title-second text-white">Surpriza aplicaţiei</h2>
            <p class="content-second text-white">La finalul acestei aventuri, noul Canon PowerShot G7 X poate fi al vostru! Împărtăşiţi cu noi poveştile despre locurile unice sau oameni frumoşi prin texte, fotografii sau video-uri, voi alegeţi!  Încărcaţi cel puţin două dintre categorii:  text +foto sau text+ video şi aparatul poate fi al vostru!</p>
            <p class="content-second text-white">Mult succes!</p>
        </div>
        <div class="col-xs-4">
            <img class="logo" src="img/logo-white.png"/>
        </div>
        <div class="col-xs-4">
            <img class="prize" src="img/prize.png"/>
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
        <div class="col-xs-2 margins">
            <a href="/img/Regulamentul-campaniei-Stiu-o-poveste.pdf" class="align-center link-white">Regulament</a>
        </div>
    </div>
    <div class="row background-red">
        <div class="col-xs-4 text-white pull-right"><br/></div>
    </div>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55513824-3', 'auto');
      ga('send', 'pageview');

    </script>
@stop
