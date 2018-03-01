@extends('layouts.app')

@section('content')

    <section class="single-page-title">
        <div class="container text-center">
            <h2>Sobre Nós</h2>
        </div>
    </section>
    <!-- .page-title -->

    <section class="about-text ptb-100">
        <section class="section-title">
            <div class="container text-center">
                <h2>Conheça um pouco mais da Assempar</h2>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Appropriately benchmark bricks-and-clicks e-business before parallel communities. Completely
                        synergize exceptional outsourcing with principle-centered platforms. Credibly unleash
                        synergistic
                        internal or "organic" sources without functionalized technology. Objectively brand granular
                        human
                        capital without goal-oriented e-business. Competently predominate multifunctional web-readiness
                        via
                        state of the art strategic theme areas.
                    </p>
                </div>
                <div class="col-md-6">
                    <p>Completely pontificate timely metrics rather than accurate growth strategies. Seamlessly impact
                        premium communities whereas real-time networks. Professionally transform high-payoff
                        collaboration
                        and idea-sharing before resource maximizing supply chains. Energistically evisculate timely
                        manufactured products for resource-leveling ROI. Assertively create client-focused vortals
                        whereas
                        functional potentialities.</p>
                </div>
            </div>
        </div>

    </section>
    <!-- .about-text-->

    <section class="skills ptb-100 gray-bg">
        <section class="section-title">
            <div class="container text-center">
                <h2>O que realizamos</h2>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="big-h2">Serviço voltado a você, cliente.</h3>

                    <p class="big-p">
                        Nós oferecemos tudo que você precisa em um só lugar, com uma solução completa.
                        Somos focados na realização de analise e assesoria cadastral para agilizar e facilitar o
                        dia-a-dia em momentos únicos, como na locação de um novo imóvel.
                    </p>

                    <p class="big-p">
                        A Assempar foi criada para te oferecer um conjunto de soluções únicas, acompanhada de um grande
                        complemento: atendimento personalizado e focado no que você realmente precisa, sem
                        enrolações.
                    </p>

                    <p class="big-p">
                        Atualmente nosso principal desafio é agilizar o seu processo de análise cadastral e diminuir, em
                        grandes taxas, o risco do seu negócio ao fechar garantias locatícias e demais serviços que
                        envolvam qualquer tipo de análise cadastral.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- .skills -->

    @include('sections.testimonials')

@endsection