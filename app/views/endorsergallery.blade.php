@extends('layout.master')

@section('content')
    @include('layout.header')
    	<div class="row background-grey">
	        <div class="col-xs-8">
	            <img class="bubble" src="/img/buble-red-head.png"/>
	            <h2 class="title-second">Ştiu o poveste despre…aventura noastră!</h2>
	            <p class="content-second">Alături de alţi oameni dornici să descopere, am pornit şi noi în căutarea unor destinaţii faine, în căutarea unor oameni speciali din România. Indiferent că am mers înspre vest sau est sau de la nord la sud, am găsit în orice loc în care am ajuns oameni deosebiţi, cu iniţiative pe care ne dorim să le facem auzite. Iată descoperirile noastre!</p>
	        	<p class="content-second">Acum este rândul vostru!</p>
	        </div>

	        <div class="col-xs-4 align-center">
	            <a href="/entry" class="btn btn-danger button-arata-ne-eg text-white">Ce povesti ştiţi voi?</a>
	            <p class="marginz">Şi poţi câştiga un echipament de iarnă</p>
	            <a href="/gallery" class="margin btn btn-default text-white">Poveştile altora...</a>
	        </div>
    	</div>
    	<!-- Line Break -->
	    <div class="row">
	        <div class="background-red">
	            <div class="line-break"></div>
	        </div>
	    </div>
	    <!-- Line Break -->
	    <div class="row background-grey row-padding">
	        <div class="col-xs-2 ">
	        	<div class="user-photo margin-full">
	            	<img class="" src="/img/profile-pic-default.png"/>
	            </div>
	        </div>
            <h3 class="col-xs-4 eg-username-title">Ion Popescu</h3>

	    </div>
	    <div class="row background-grey">
	    	<a href="https//www.zoso.ro/" class="link-black hand blog-link">www.example.com</a>
	    </div>
	    

	    <div class="row background-grey">
	    	<div class="col-xs-2">
	    		<span class="eg-glyph glyphicon glyphicon-pencil"></span>
	    	</div>
	    	<div class="col-xs-8">
	    		<h4 class="eg-second-title">Despre Romania mea</h4>
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

	   <!-- Line Break -->
	    <div class="row">
	        <div class="background-red">
	            <div class=" line-break"></div>
	        </div>
	    </div>
	    <!-- Line Break -->

	    <div class="row background-grey">
	    	<div class="col-xs-2">
	    		<span class="eg-glyph glyphicon glyphicon-camera"></span>
	    	</div>
	    	<div class="col-xs-8">
	    		<h4 class="eg-second-title">Vezi cum o vad si eu</h4>
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
	    <!-- Line Break -->
	    <div class="row">
	        <div class="background-red">
	            <div class=" line-break"></div>
	        </div>
	    </div>
	    <!-- Line Break -->
	    <div class="row background-grey">
	    	<div class="col-xs-2">
	    		<span class="eg-glyph glyphicon glyphicon-film"></span>
	    	</div>
	    	<div class="col-xs-8">
	    		<h4 class="eg-second-title">Filmeaza ca si mine</h4>
	    	</div>
		    <div class="col-xs-6 eg-example-vid">
                <iframe width="470" height="263" src="//www.youtube.com/embed/-dZGDy45ZeI" frameborder="0" allowfullscreen></iframe>
            </div>
	    </div>
        <!-- Line Break -->
	    <div class="row">
	        <div class="background-red">
	            <div class=" line-break"></div>
	        </div>
	    </div>
	    <!-- Line Break -->
	@include('layout.footer')
@stop