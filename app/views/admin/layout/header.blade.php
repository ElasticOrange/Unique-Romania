<!-- Static navbar -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin/">Panou administrare</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('admin/entry') ? 'active' : '' }}"><a href="/admin/entry">Aproba inscrieri</a></li>
                <li class="{{ Request::is('admin/entry/disapprove') ? 'active' : '' }}"><a href="/admin/entry/disapprove">Dezaproba inscrieri</a></li>
                <li class="{{ Request::is('admin/entry/logout') }}"><a href="/admin/entry/logout">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
