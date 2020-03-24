<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ env('APP_NAME', 'Assempar') }}</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/img/favs/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favs/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favs/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favs/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favs/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favs/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favs/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favs/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favs/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favs/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favs/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favs/favicon-16x16.png">
    <link rel="manifest" href="/img/favs/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favs/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="{{ asset('css/mobile-menu.css') }}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Aviso</h5>
            </div>
            <div class="modal-body">
                <p>Até novos posicionamentos de nossas autoridades, o atendimento ao público será por <strong>e-mail</strong> e <strong>whatsapp</strong>.</p>
                <p>WhatsApp: (21) 97250-4063</p>
                <p>Site: <a href="http://www.assempar.com.br">http://www.assempar.com.br</a></p>
                <p>E-mail: <a href="mailto:assempar@assempar.com.br">assempar@assempar.com.br</a> | <a href="mailto:assempar@outlook.com">assempar@outlook.com</a></p>
                <p>No momento, o melhor é praticar o distanciamento social e ficar em casa.</p>
                <p>A <strong>ASSEMPAR</strong> está trabalhando <strong>HOME OFFICE</strong>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div id="main-wrapper">

    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <div class="uc-mobile-menu-pusher">
        <div class="content-wrapper">
            @include('layouts.header')

            @if(\Request::route()->getName() === 'index')
                @include('components.carousel')
            @endif

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.mobile-menu')
</div>

<!-- Script -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/mobile-menu.js') }}"></script>
<script src="{{ asset('js/flexSlider/jquery.flexslider-min.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</body>
</html>