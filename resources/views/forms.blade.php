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
                <div class="col-xs-12 col-sm-6">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Pesquisa restritiva do fiador</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'form_one']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="single_price_plan">
                        <div class="price">
                            <h2>Pesquisa restritiva do locatário</h2>
                        </div>
                        <div class="buy_now">
                            <a href="{{ route('forms', ['name' => 'form_two']) }}"
                               target="_blank" class="btn royal-btn">
                                Fazer Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- .about-text-->

@endsection