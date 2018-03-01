<div class="margin-header-mobile">
    <nav class="navbar m-menu navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('/img/logo.png') }}" alt="Logo - Assempar">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="#navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right main-nav">

                    <li class="{{ \Request::route()->getName() === 'index' ? 'active' : '' }}">
                        <a href="{{ route('index') }}">Início</a>
                    </li>

                    <li class="{{ \Request::route()->getName() === 'about' ? 'active' : '' }}">
                        <a href="{{ route('about') }}">Sobre Nós</a>
                    </li>

                    <li class="{{ str_contains(\Request::route()->getName(), 'forms') ? 'active' : '' }}">
                        <a href="{{ route('forms') }}">Formulários</a>
                    </li>

                    <li class="{{ \Request::route()->getName() === 'contact' ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contato</a>
                    </li>

                </ul>

            </div>
            <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
    </nav>
</div>
<!-- .nav -->