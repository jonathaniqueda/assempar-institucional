@extends('layouts.app')

@section('content')

    <section class="single-page-title">
        <div class="container text-center">
            <h2>Contato</h2>
        </div>
    </section>
    <!-- .page-title -->

    <section class="contact-form ptb-100">
        <div class="container text-center">
            <h2>
                Preencha todos os campos abaixo e nos envie uma mensagem<br/>
                que lhe responderemos em até 48 horas.
            </h2>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="{{ route('contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group user-name">
                                    <label for="nameFive-first" class="sr-only">Nome</label>
                                    <input type="text" class="form-control"
                                           required=""
                                           id="name"
                                           name="name"
                                           placeholder="Seu Nome">
                                </div>

                                @if($errors->has('name'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif

                                <div class="form-group user-email">
                                    <label for="emailFive" class="sr-only">E-mail</label>
                                    <input type="email" class="form-control"
                                           id="email"
                                           required=""
                                           name="email"
                                           placeholder="Seu E-mail">
                                </div>

                                @if($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif

                                <div class="form-group user-phone">
                                    <label for="websiteOne" class="sr-only">Telefone</label>
                                    <input type="text" class="form-control phone_with_ddd"
                                           required=""
                                           id="phone"
                                           name="phone"
                                           placeholder="Telefone">
                                </div>

                                @if($errors->has('phone'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group user-message">
                                    <label for="messageOne" class="sr-only">Mensagem</label>
                                    <textarea class="form-control"
                                              required=""
                                              id="msg"
                                              name="msg"
                                              placeholder="Digite sua mensagem"></textarea>
                                </div>

                                @if($errors->has('msg'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('msg') }}
                                    </div>
                                @endif
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row-->
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>

                    @if(!empty(session('status')))
                        <div class="alert alert-success" style="margin-top: 15px;">
                            {{ session('status') }}
                        </div>
                    @endif
                </div><!-- /.col-md-8 -->
            </div>

        </div>
    </section>
    <!-- .contact-form-->

    <section class="map-section">
        <div id="googleMap"></div>
    </section>
    <!--.map-section-->

@endsection