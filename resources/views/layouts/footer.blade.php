<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>
                            Continually matrix cross functional opportunities whereas ethical information. Compellingly
                            streamline enabled human capital before resource-leveling internal or "organic".
                        </p>

                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>Somos especializados</h3>
                        <p>
                            Há mais de XX anos no mercado,
                            nós somos especializados em assessoria cadastral e com certeza iremos
                            oferecer a melhor do nosso serviço a você e a sua empresa.
                            <a href="{{ route('contact') }}">Entre em contato</a> agora mesmo.
                        </p>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <h3>Entre em contato hoje mesmo</h3>
                        <address>
                            Telefones: (21) 2210-1261 | 3553-1380<br>
                            Nos envie um e-mail <a
                                    href="mailto:assempar@assempar.com.br">assempar@assempar.com.br</a><br>
                            Edifício Cinelândia - R. Sen. Dantas, 19<br/>
                            Sala 509 - Centro, Rio de Janeiro - RJ<br>
                            CEP: 20031-202<br>
                        </address>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
            <span class="copytext">Copyright &copy; {{ date('Y') }} |
                <a href="https://assempar.com.br">Assempar</a>

                Desenvolvido por:

                <strong style="color: #31aae2;">
                    <a href="https://seuguru.digital" target="_blank">seuguru.digital</a>
                </strong>
            </span>

            <ul class="list-inline pull-right">
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
        </div><!-- .container -->
    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->