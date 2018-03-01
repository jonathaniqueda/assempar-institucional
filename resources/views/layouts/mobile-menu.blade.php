<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;
    </button>
    <div>
        <div>
            <ul id="menu">
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
    </div>
</div>