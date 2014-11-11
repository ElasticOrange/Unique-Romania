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
		        <img class="prize-reminder" src="img/logo-camera.png"/>
		    </div>
		</div>

		 <div class="row background-grey">
		    <div class="">
		        <div class="line-break line-break-space"></div>
		    </div>
		</div>

		<div class="row background-grey">
			<div class="col-xs-12 margin-progressbar-top ">
				<div class="progress margin-progress-bar nuheight">
					<div class="progress-bar nuprogress" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:33%;">
					  	<span class="sr-only">60% Complete</span>
					</div>
				</div>
				<div class="margins">
				    <span class="glyph-progress glyph-progress-active glyphicon glyphicon-pencil"></span>
				    
				    <span class="glyph-progress glyph-progress-inactive glyphicon glyphicon-camera glyph-space-camera"></span>
				    
				    <span class="glyph-progress glyph-progress-inactive glyphicon glyphicon-film glyph-space-film"></span>
				    
				    <span class="glyph-progress glyph-progress-inactive glyphicon glyphicon-user glyph-space-user"></span>
				</div>
			</div>
		</div>
	<!-- static rows -->

	<div class="hidden">
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

	    <div class="row background-grey">
	        <div class="col-xs-4 pull-right margin-canon-regulament">
	            <a href="http://www.canon.ro" class="link-black link-size">www.canon.ro</a>
	            <span>|</span>
	            <a href="#" class="link-black link-size">Regulament</a>
	        </div>
	    </div>
	</div>		
		<div class="row background-grey">
 			<div class="col-xs-8">
		        <img class="bubble" src="/img/buble-red-head.png"/>
		        <h2 class="title-second">Arata ce ai vazut</h2>
		    </div>
		</div>
		<div class="row background-grey">
            <div class="col-xs-12">
            	<img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="col-xs-2 upload-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="col-xs-2 upload-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="col-xs-2 upload-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="col-xs-2 upload-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="col-xs-2 upload-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="col-xs-2 upload-pic" />
            </div>
        </div>
        <div class="row background-grey">
        	<div class="col-xs-6 col-xs-offset-3">
			    <div class="input-group">
			      <input type="text" class="form-control">
			      <span class="input-group-btn">
			        <button class="btn btn-default text-white  color-btn" type="button">Incarca</button>
			      </span>
			    </div>
			</div>
		</div>
		<div class="row background-grey">
	        <div class="col-xs-2">
	            <a href="#" class="btn btn-danger btn-md">Inapoi un pas</a>
	        </div>
	        <div class="col-xs-2">
	            <a href="#" class="btn btn-danger btn-md">Inainte un pas</a>
	        </div>
	    </div>
@stop



