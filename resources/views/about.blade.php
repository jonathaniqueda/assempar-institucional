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
                    <p class="big-p">
                        A ASSEMPAR é uma empresa de Assessoria especializada em Análises Cadastrais de pretendentes a
                        Locação de Imóveis e seus Fiadores, Aprovação de Créditos, Admissão de Funcionários e Serviços
                        de Certidões, fundada em 01/02/1972.
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="big-p">
                        Seja nosso CLIENTE CADASTRADO, se sua empresa ou instituição utiliza frequentemente pesquisas
                        cadastrais para venda, locação, emprego e outras finalidades, torne-se nosso cliente cadastrado
                        e obtenha condições especiais de atendimento e pagamento.

                        <a href="{{ route('contact') }}">Entre em contato</a> que nossa equipe comercial irá lhe
                        atender.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- .about-text-->

    <section class="skills ptb-100 gray-bg">
        <section class="section-title">
            <div class="container text-center">
                <h2>Nossa Missão</h2>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="big-p">
                        Atender às expectativas dos clientes nas suas necessidades com AGILIDADE, QUALIDADE e EXATIDÃO
                        NAS INFORMAÇÕES, através de uma equipe bem preparada que entende e gosta do que faz!!
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="skills ptb-100">
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
                        Nós oferecemos tudo que você precisa em um só lugar, com uma solução completa. Somos focados na
                        realização de análise e assessoria cadastral para agilizar e facilitar o dia-a-dia em momentos
                        únicos, como na locação de um novo imóvel.
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