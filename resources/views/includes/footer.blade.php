<div id="footer" class="d-none d-md-block">
    <section class="news-footer">
        <div class="container container mb-4 p-3">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="subscribe-text mb-15">
                        <h4>Newsletter</h4>
                        <p>Quer receber novidades e promoções sobre cursos? Cadastre-se na nossa newsletter.</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="subscribe-form">
                        <form method="post" class="d-md-flex">
                            @csrf
                            <input type="email" required name="email" id="inputletter" class="form-control"
                                   placeholder="Digite seu email">
                            <button type="button"
                                    data-loading-text="<i class='fas fa-spinner fa-spin mr-2'></i>Aguarde..."
                                    class="botaoFooter">Cadastrar
                            </button>
                        </form>
                        <div id="newsletterMessage"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-4 p-3">
        <div class="row">
            <div class="col-md-3">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Isig" class="logo img-fluid">
                </a>
                <div class="col-md-12 social-media text-aling-center">
                    <a href="https://www.facebook.com/isig.treinamentos"> <i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com/isig.treinamentos"> <i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/isig-treinamentos"> <i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex my-3">
                    <div class="icon-box-icon">
                        <i aria-hidden="true" class="fas fa-phone-volume"></i>
                    </div>
                    <div>
                        <p>Distrito Federal: (61) 99884-2889</p>
                    </div>
                </div>
                <div class="d-flex my-3">
                    <div class="icon-box-icon">
                        <i aria-hidden="true" class="far fa-envelope-open"></i>
                    </div>
                    <div>
                        <a href="mailto:contato@isigtreinamentos.com.br">contato@isigtreinamentos.com.br</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="d-flex my-3">
                    <div class="icon-box-icon">
                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <p>Impact Hub Brasília | Sgan 601 Conjunto H </br> Sala 54 Ss1 Edifício Íon - Asa
                            Norte,</br>Brasília/DF </br>CEP: 70830-018</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <a target="_blank"
                   href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fisigtreinamentos.com.br%2F&hl=pt_BR">
                    <img class="selo-footer my-3" src="/images/site-seguro.png"> </a>
            </div>

        </div>
    </div>

    <p class="copyright m-0 font-weight-bold">Copyright {{ date('Y') }} | {{ config('app.name') }} ®</p>
</div>

<footer class="d-block d-md-none pt-3">
    <div class="container pb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="col-8 offset-2 col-sm-12 offset-sm-0">
                                <a href="/">
                                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}"
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-12 social-media text-aling-center mt-3">
                                <a href="https://www.facebook.com/acic.caruaru"> <i
                                        class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/AcicCaruaru/"> <i class="fab fa-instagram"></i></a>
                                <a href="http://twitter.com/AcicCaruaru"> <i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="row align-items-center">
                            <div class="col-6 offset-3 offset-sm-0 col-sm-4 mb-3 mb-sm-0">
                                <img class="img-fluid" src="{{ asset('/images/selossl.png') }}" alt="Selo SSL">
                            </div>

                            <div class="col-6 offset-3 offset-sm-0 col-sm-4 mb-3 mb-sm-0">
                                <img class="img-fluid" src="{{ asset('/images/compra.png') }}"
                                     alt="Selo Compra Segura">
                            </div>

                            <div class="col-6 offset-3 offset-sm-0 col-sm-4 mb-3 mb-sm-0">
                                <a target="_blank"
                                   href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fisigtreinamentos.com.br%2F&hl=pt_BR">
                                    <img class="img-fluid" src="/images/site-seguro.png" alt="Selo site seguro">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter container-fluid py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="font-weight-bold mb-3">ACIC - Associação Comercial e Empresarial de Caruaru</h5>
                <h5 class="mb-3">Rua Armando da Fonte, 15 - 2°
                    Andar - Mauricio de Nassau | CEP 55012-025 | Caruaru - PE</h5>
                <h3 class="font-weight-bold">Fone: (81) 3721-2725</h3>
            </div>
        </div>
    </div>
    <p class="copyright m-0 font-weight-bold">Copyright {{ date('Y') }} | {{ config('app.name') }} ®</p>
</footer>
