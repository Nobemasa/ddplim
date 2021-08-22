@extends('layouts.main')

@section('title', 'DDPLIM Dedetizadora')

@section('content')

    <a href="https://api.whatsapp.com/send?phone=5519996201509&text=Contato pelo site DDPLIM DEDETIZADORA" 
    target="_blank"><img  class="whatsapp" src="img/chame-no-zap.png" /></a>

    <div class="container mb-1">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-2 text-center text-md-right ">
                <img class="logo" src="{{ asset('img/logo.png') }}"/>
            </div>
            <div class="col-12 col-sm-9 col-md-10 text-center text-sm-left mt-sm-4">
                <h2 class="cinza">GRUPO DDPLIM</h2>
                <h4 class="cinza">Controle de Pragas Urbanas</h4>
            </div>
        </div>
    </div>


<div class="row">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/s1.png" style="width:100%; height:40%;" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/s2.png" style="width:100%; height:40%;" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/s3.png" style="width:100%; height:40%;" alt="Terceiro Slide">
            </div>
        </div>
        </div>
</div>

    
    <div class="container text-center">

        <div class="row mb-2">
            <h2 class="col-12 cinza mt-5">Saber para se Proteger</h2>
        </div>

        <div class="slide-track">
            <div class="row shadow">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="videos/Pragas.mp4" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <h2 class="col-12 cinza mt-3">Quem somos</h2>
        </div>

        <div class="row mb-5">
            <h5 class="col-12 cinza text-center">
            O GRUPO DDPLIM é uma empresa com mais de 06 anos de atuação no controle de pragas urbanas, 
            higienização e limpeza robótica de dutos de ar condicionado, limpeza e higienização de reservatórios 
            de água, limpezas em geral, tendo o compromisso a qualidade de vida.
            </h5>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Missão</h5>
                    <p class="card-text">Prestar serviços com elevado padrão de qualidade e respeito ao meio ambiente.</p>
                </div>
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Visão</h5>
                    <p class="card-text">Ser líder no mercado nacional, reconhecida pelo alto padrão de qualidade.</p>
                </div>
            </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Valores</h5>
                    <p class="card-text">Transparência, ética, respeito, qualidade, comprometimento e espírito de equipe.</p>
                </div>
            </div>
            </div>
        </div>

    </div>

    <section class="header-site mt-5">
        <div class="container">
            <div class="row p-3 img-fluid">
                <div class="col-12">
                    <h1 class="font-weigh-bold text-left">Ambientes sempre protegidos!</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container text-center">

        <div class="row mb-2">
            <h2 class="col-12 cinza mt-5">Áreas de Atuação</h2>
        </div>

    <div class="row">   
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="row justify-content-center">
                    <div class=" wow slideInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="card" style="width: 15rem;">
                            <img class="atuacao_img" src="img/hosp1.png">
                            <div class="card-body">
                                <h5 class="card-title">Hospitais</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="row justify-content-center">
                    <div class="wow slideIn" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideIn;">
                        <div class="card" style="width: 15rem;">
                            <img class="atuacao_img" src="img/cas.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Residências</h5>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="row justify-content-center">
                    <div class=" wow slideInRight" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInRight;">
                        <div class="card" style="width: 15rem;">
                            <img class="atuacao_img" src="img/rest.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Restaurantes</h5>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="row  justify-content-center ">
                    <div class="wow slideInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="card" style="width: 15rem;">
                            <img class="atuacao_img" src="img/silos.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Depósito de Grãos</h5>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="row  justify-content-center ">
                    <div class="wow slideIn" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideIn;">
                        <div class="card" style="width: 15rem;">
                            <img class="atuacao_img" src="img/empresa.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Empresas</h5>   
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="row  justify-content-center ">
                    <div class="wow slideInRight" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInRight;">
                        <div class="card" style="width: 15rem;">
                            <img class="atuacao_img" src="img/dutos.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Dutos</h5>   
                            </div>
                        </div>
                    </div>
               </div>
            </div>
    </div>

        <div class="row mt-3">
            <h2 class="col-12 cinza mt-3">Clientes</h2>
        </div>

        <div class="slider mb-2">
            <div class="slide-track">
                <div class="slide">
                    <img src="img/clientes/unimed.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/cargill.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/sesi-logo.png"/>
                </div>
                <div class="slide">
                    <img src="img/clientes/lupo.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/podemosvencer.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/sca.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/chiq.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/unnamed.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/Logo-FHO-Uniararas.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/ccm.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/rino.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/unimed.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/cargill.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/sesi-logo.png"/>
                </div>
                <div class="slide">
                    <img src="img/clientes/lupo.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/podemosvencer.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/sca.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/chiq.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/unnamed.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/Logo-FHO-Uniararas.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/ccm.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/rino.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/unimed.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/cargill.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/sesi-logo.png"/>
                </div>
                <div class="slide">
                    <img src="img/clientes/lupo.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/podemosvencer.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/sca.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/chiq.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/unnamed.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/Logo-FHO-Uniararas.jpg" />
                </div>
                <div class="slide">
                    <img src="img/clientes/ccm.png" />
                </div>
                <div class="slide">
                    <img src="img/clientes/rino.png" />
                </div>

            </div>
        </div>

   

        <div class="row mb-2">
            <h2 class="col-12 cinza mt-5">Parceiros</h2>
        </div>

        <div class="slide-track">
        <div class="row shadow">
            <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiros">
                    <img src="img/parceiros/arduto.png" />
                </div>
            </div>

            <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiros">
                    <img src="img/parceiros/tek.png" />
                </div>
            </div>

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiroslide">
                    <img src="img/parceiros/Logo_Bayer.svg.png" />
                </div>
            </div>

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiroslide">
                    <img src="img/parceiros/Liphatech-logo-2019-648.jpg" />
                </div>
            </div>

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiroslide">
                    <img src="img/parceiros/unnamed.jpg" />
                </div>
            </div>

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="2s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiroslide">
                    <img src="img/parceiros/logotipo.png" />
                </div>
            </div>

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="2.5s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiroslide">
                    <img src="img/parceiros/nitrosin_logo_azul.jpg" />
                </div>
            </div>

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="3s" style="visibility: visible; animation-name: fadeInUp;">
                <div class="parceiroslide">
                    <img src="img/parceiros/2560px-Syngenta_Logo.svg.png" />
                </div>
            </div>
        </div>
        </div>
        
    
        <div class="container mb-5 text-center">
            <div class="row mb-2 mt-5">
                <h2 class="col-12 cinza mt-3">Contato</h2>
            </div>

            <div class="card-group">
                <div class="card p-3">
                    <img class="atuacao_img" src="img/google-maps.jpg">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold">Onde estamos</h5>
                    <p class="card-text">Rua Padre Capelli, 230 Centro</p>
                    <p class="card-text mt-n1"> Porto Ferreira-SP.</p>
                    </div>
                    <div class="card-footer">
                    <a href="#" class="btn btn-primary">Iniciar GPS</a>
                    </div>
                </div>
                <div class="card p-3">
                    <img class="atuacao_img" src="img/telefone.jpg">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold">Telefones</h5>
                    <p class="card-text">Fixo (19) 3585-3538</p>
                    <p class="card-text mt-n1">Celular (19) 9 9620-1509</p>
                    </div>
                    <div class="card-footer">
                    <a href="tel:551935853538" class="btn btn-primary">Ligar</a>
                    </div>
                </div>
                <div class="card p-3">
                    <img class="atuacao_img" src="img/horarios.jpg">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold">Horário de Atendimento</h5>
                    <p class="card-text mt-2">Segunda à Sexta 8h ~ 18h</p>
                    <p class="card-text">Sábados 8h ~ 12h</p>
                    </div>
                
                </div>
            </div>

            <div class="card-group">
                <div class="card p-3">
                    <img class="atuacao_img" src="img/facebook.jpg">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold">Rede Social</h5>
                    <p class="card-text">Curta nossa página</p>
                    <p class="card-text mt-n1">no Facebook.</p>
                    </div>
                    <div class="card-footer">
                    <a href="https://www.facebook.com/dedetizadoraddplim.dedetizadora?ref=bookmarks" target="_blank" class="btn btn-primary">Curtir</a>
                    </div>
                </div>
                <div class="card p-3">
                    <img class="atuacao_img" src="img/email.jpeg">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold">E-mail</h5>
                    <p class="card-text">Entre em contato por e-mail nossa equipe entrará em contato</p>
                    </div>
                    <div class="card-footer">
                    <a href="mailto:ddplimdedetizadoracomercial@gmail.com?subject=Contato&nbsp;Site" class="btn btn-primary">Escrever</a>
                    </div>
                </div>
                <div class="card p-3">
                    <img class="atuacao_img" src="img/orcam.jpg">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold">Orçamento</h5>
                    <p class="card-text">Solicite agora um</p>
                    <p class="card-text mt-n1"> orçamento sem compromisso</p>
                    </div>
                    <div class="card-footer">
                    <a href="https://api.whatsapp.com/send?phone=5519996201509&text=Orçamento pelo site DDPLIM DEDETIZADORA" 
        target="_blank" class="btn btn-primary">Solicitar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

  

  @endsection