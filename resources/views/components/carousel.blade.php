<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/hero-slide-1.jpg" alt="Assempar - Slide 1">

            <div class="carousel-caption">
                <h1>Facilitamos e agilizamos sua análise cadastral</h1>

                <p>
                    Oferecemos soluções completas e agéis para facilitar o seu negócio e aumentar as suas taxas de
                    sucesso em momentos como uma nova locação.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-2.jpg" alt="Assempar - Slide 2">

            <div class="carousel-caption">
                <h1>Atendimento Personalizado</h1>

                <p>
                    Oferecemos um atendimento único e nos comprometemos com prazo e agilidade.
                    <a href="{{ route('contact') }}">Entre em contato</a> com os nossos consultores.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-3.jpg" alt="Assempar - Slide 3">

            <div class="carousel-caption">
                <h1>Formulários Online</h1>

                <p>
                    Na Assempar você possui a facilidade de fazer o download dos formulários e acelerar o processo da
                    análise já fazendo o downlaod dos formulários. <a href="{{ route('forms') }}">Clique aqui</a> e
                    veja agora mesmo.
                </p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Próximo</span>
    </a>
</div>
<!-- #x-corp-carousel-->