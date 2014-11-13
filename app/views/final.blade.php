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
				<p>Vei primii in scurt timp un email de confirmare la adresa xxx_xxxxx@gmail.com</p>
			</div>
		</div>
		<div class="col-xs-4">
	        <a href="#" class="btn btn-danger text-white margin">Afla cum vad altii</a>
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
				<p>Ai intrat in cursa pentru a castiga un super aparat photo Canon.</p>
				<p>Stai cu ochii pe pagina Facebook Canon Romania si afla daca ai castigat. Extragerea va avea loc in data de xx.xx.xxxx</p>
			</div>
		</div>
		<div class="row background-grey">
			<div class="col-xs-4">
		        <a href="#" class="btn btn-danger text-white margins">Vezi pagina ta</a>
		    </div>
	    </div>
	</div>
@include('layout.footer')
@stop