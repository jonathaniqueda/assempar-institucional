@extends('layouts.app')

@section('content')

    <section class="single-page-title">
        <div class="container text-center">
            <h2>Formulários</h2>
        </div>
    </section>
    <!-- .page-title -->

    <section class="about-text ptb-100">
        <section class="section-title">
            <div class="container text-center">
                <h2>Faça o download dos formulários logo abaixo</h2>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="big-p">
                            Aqui você irá encontrar todos os formulários da Assempar e poderá fazer o download para
                            agilizar o preenchimento e a documentação.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Formulário fiador</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'formulario_fiador.doc']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Formulário locatário</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'formulario_locatario.doc']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Pesquisa Restritiva</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'formulario_minf.doc']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Ficha de Emprego</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'formulario_emprego.doc']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Formulário de Pessoa Jurídica</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'formulario_pj.doc']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2 style="font-size: 20px">Documentos para Comprovar Renda</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'comprovante_de_renda.docx']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="big-p">
                        Se ficou alguma dúvida, não hesite em entrar em contato conosco <a
                                href="{{ route('contact') }}">clicando aqui.</a>
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- .about-text-->

@endsection