@extends('layout.master')

@section('content')
    @include('layout.header')
    	<div class="row background-grey">
	        <div class="col-xs-8">
	            <img class="bubble" src="/img/buble-red-head.png"/>
	            <h2 class="title-second">Invata de la maestrii bloggeri</h2>
	            <p class="content-second">Si bloggeri au pornit în căutarea unor destinaţii sau oameni unici în România. Indiferent că au mers înspre vest sau est sau de la nord la sud, au găsit oameni deosebiţi, cu iniţiative pe care au dorit să le faca auzite. Iată descoperirile lor!</p>
	        </div>

	        <div class="col-xs-4 align-center">
	            <a href="/entry" class="btn btn-danger button-arata-ne-eg text-white">Arata-ne cum vezi tu</a>
	            <p class="marginz">Si poti castiga un aparat profesional canon EOS</p>
	            <a href="/entry" class="margin btn btn-default text-white">Cum vad altii ...</a>
	        </div>

    	</div>

	    <div class="row background-grey">
	        <div class="col-xs-2">
	            <img class="margin-full" src="../img/profile-pic-default.png"/>
	        </div>
            <h3 class="col-xs-4 username-title">Corneliu Vasilescu</h3>
	    </div>
		    <!-- 
		    <div class="row background-grey">
		       	<div class="col-xs-4 eg-glyph-btns">
		       		<span class="eg-glyph glyphicon glyphicon-pencil"></span>
		       		<span class="eg-glyph glyphicon glyphicon-camera"></span>
		       		<span class="eg-glyph glyphicon glyphicon-film"></span>
		       	</div>
		    </div>-->

	    <div class="row background-grey">
	    	<div class="col-xs-2">
	    		<span class="eg-glyph glyphicon glyphicon-pencil"></span>
	    	</div>
	    	<div class="col-xs-8">
	    		<h4 class="eg-username-title">Despre Romania mea</h4>
	    	</div>
	    </div>
		<div class="row background-grey">
			<div class="col-xs-11">
				<p class="content-second margins">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
				 sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
				 Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
				 ut aliquip ex ea commodo consequat.
				 Duis autem vel eum iriure dolor in hendrerit in vulputate
				 velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
				 accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore
				 te feugait nulla facilisi.</p>
			</div>
	    </div>

	    <div class="row background-grey">
	    	<div class="col-xs-2">
	    		<span class="eg-glyph glyphicon glyphicon-camera"></span>
	    	</div>
	    	<div class="col-xs-8">
	    		<h4 class="eg-username-title">Vezi cum o vad si eu</h4>
	    	</div>
	    </div>
		<div class="row background-grey">	
			<div class="col-xs-12 hand margins">
            	<img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="example-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="example-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="example-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="example-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="example-pic" />
                <img src="http://images.carmelrealtycompany.com/webart/mls/thumb/748.jpg" class="example-pic" />
            </div>
	    </div>
	    <div class="row background-grey">
	    	<div class="col-xs-2">
	    		<span class="eg-glyph glyphicon glyphicon-film"></span>
	    	</div>
	    	<div class="col-xs-8">
	    		<h4 class="eg-username-title">Filmeaza ca si mine</h4>
	    	</div>
		    <div class="col-xs-6 example-vid">
                <iframe width="470" height="263" src="//www.youtube.com/embed/KRXn7dfnmW8" frameborder="0" allowfullscreen></iframe>
            </div>
	    </div>

@include('layout.footer')
@stop