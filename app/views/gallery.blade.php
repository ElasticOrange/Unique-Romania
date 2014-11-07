@extends('layout.master')

@section('content')
    <div class="row header-image">
    	<div class="col-xs-8 text-white">
 			<h1 class="title-heading">Unique Romania</h1>
 		</div>
 		<div class="col-xs-4">
			<img class="logo-white" src="/img/logo-white.png" />
		</div>
    </div>
    
    <div class="row background-grey">
        <div class="col-xs-8">
            <img class="bubble" src="/img/buble-red-head.png"/>
            <h2 class="title-second">Cum vad altii Romania</h2>
            <p class="content-second">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu .</p>
        </div>
        
       	<div class="col-xs-4 align-center">
            <a href="#" class="btn btn-danger btn-md button-arata-ne text-white">Arata-ne cum vezi tu</a>
        </div>

    </div>

    <!--FIX>
    <div class="row">
    	<div class="background-grey-dropdown">
            <div class="line-break"></div>
        </div>
    </div>
     <FIX-->


    <!-- fix-->

    <div class="row background-grey">
    	<div class="col-xs-12">
            <div class="input-group input-search center">
          		<input class="form-control" type="text" placeholder="Cauta dupa nume">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <div class="glyphicon glyphicon-search"></div>
                    </button>
                </span>
            </div>
        </div>
    </div>

    <!-- user-field -->

    <div class="row background-grey">
    	<div class="col-xs-2">
    		<img class="" src="../img/profile-pic-default.png"/>
    	</div>
    		<h3 class="col-md-4 username-title">Corneliu Vasilescu</h3>
    	<div class="col-md-4">
	    	<span class="glyphicon glyphicon-pencil"></span>
	    	<span class="glyphicon glyphicon-camera"></span>
	    	<span class="glyphicon glyphicon-facetime-video"></span>
	    	<span class="glyphicon glyphicon-chevron-down"></span>
	    </div>
	</div>
	<!-- user-field -->
    <div>
        <div class="row background-grey-dropdown">
            <div class="col-xs-12">
                <img class="bubble" src="img/buble-red-head.png"/>
                <h2 class="title-second">Nume articol</h2>
                <p class="content-second">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu .</p>
            </div>
        </div>
        <div class="row background-grey-dropdown">
            <div class="col-xs-12">
                <img class="bubble" src="img/buble-red-head.png"/>
                <h2 class="title-second">Galerie Poze</h2>
            </div>
        </div>
        <!--- img SRC!!!! -->
        <div class="row background-grey-dropdown">
        	<div class="col-xs-4 margins-big example-pic"></div>
            <div class="col-xs-4 example-pic"></div>
            <div class="col-xs-4 example-pic"></div>
        </div>

        <div class="row background-grey-dropdown">
            <div class="col-xs-4 margins-big example-pic"></div>
            
            <div class="col-xs-4 example-pic"></div>
        </div>

    <!--Galeria Video-->

        <div class="row background-grey-dropdown">
            <div class="col-xs-12">
                <img class="bubble" src="img/buble-red-head.png"/>
                <h2 class="title-second">Galerie Video</h2>
            </div>
            <hr/>
            <div class="row">
                <div class="col-xs-2">
                    <img src="img/left-arrow.png" /><!-- gliph! -->
                </div>
                <div class="col-xs-8">
                    <iframe width="470" height="263" src="//www.youtube.com/embed/KRXn7dfnmW8" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-xs-2">
                    <img src="img/right-arrow.png" /><!-- gliph! -->
                </div>
            </div>
        </div>   
        
        <!--Galeria Video-->
    </div>
    


    <!-- square loading things -->
    <div class="row background-grey">
        <div class="col-xs-12 align-center">
            <img class="loading-square" src="img/loading-square-1.png"/><!--div cu bk color-->
            <img class="loading-square" src="img/loading-square-2.png"/>
            <img class="loading-square" src="img/loading-square-3.png"/>
        </div>
    </div>
    <!-- square loading things-->

    <div class="row background-grey">
        <div class="col-xs-4 pull-right">
            <a href="http://www.canon.ro" class="link-black link-size">www.canon.ro</a>
            <span>|</span>
            <a href="#" class="link-black link-size">Regulament</a>
        </div>
    </div>


@stop
