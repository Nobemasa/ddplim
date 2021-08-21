@extends('layouts.main')

@section('title', 'DDPLIM Dedetizadora')

@section('content')

    <a href="https://api.whatsapp.com/send?phone=5519996201509&text=Contato pelo site DDPLIM DEDETIZADORA" 
    target="_blank"><img  class="whatsapp" src="img/chame-no-zap.png" /></a>

    <div class="container mb-1">
        <div class="row">
            <img class="logo col-2" src="{{ asset('img/logo.png') }}"/>
                <div class="col-6 p-2 ">
                <h2 class="cinza mt-3">GRUPO DDPLIM</h2>
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
            <h5 class="cinza text-center">
            O GRUPO DDPLIM é uma empresa com mais de 06 anos de atuação no controle de pragas urbanas, 
            higienização e limpeza robótica de dutos de ar condicionado, limpeza e higienização de reservatórios 
            de água, limpezas em geral, tendo o compromisso a qualidade de vida.
            </h5>
        </div>

        <div class="row">
            <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Missão</h5>
                    <p class="card-text">Prestar serviços com elevado padrão de qualidade e respeito ao meio ambiente.</p>
                </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Visão</h5>
                    <p class="card-text">Ser líder no mercado nacional, reconhecida pelo alto padrão de qualidade.</p>
                </div>
            </div>
            </div>
            <div class="col-sm-4">
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
            <div class="col-4">
                <div class="row  justify-content-start ">
                    <div class=" wow slideInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/hosp1.png" height="320">
                            <div class="card-body">
                                <h5 class="card-title">Hospitais</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-4">
                <div class="row  justify-content-center ">
                    <div class="wow slideIn" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideIn;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/cas.jpg" height="320">
                            <div class="card-body">
                                <h5 class="card-title">Residências</h5>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row  justify-content-end ">
                    <div class=" wow slideInRight" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInRight;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/rest.jpg" height="320">
                            <div class="card-body">
                                <h5 class="card-title">Restaurantes</h5>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row mt-3">
            <div class="col-4">
                <div class="row  justify-content-start ">
                    <div class="wow slideInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/silos.jpg" height="320">
                            <div class="card-body">
                                <h5 class="card-title">Depósito de Grãos</h5>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
            <div class="col-4">
                <div class="row  justify-content-center ">
                    <div class="wow slideIn" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideIn;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/empresa.jpg" height="320">
                            <div class="card-body">
                                <h5 class="card-title">Empresas</h5>   
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            
            <div class="col-4">
                <div class="row  justify-content-end ">
                    <div class="wow slideInRight" data-wow-delay="0.5s" style="visibility: visible; animation-name: slideInRight;">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/dutos.jpg" height="320">
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
        
    

        <div class="row mb-2 mt-5">
            <h2 class="col-12 cinza mt-3">Contato</h2>
        </div>

        <div class="container mb-5 p-5 shadow">
        <div class="row">
            <div class="col-4">
                <div class="row  justify-content-start ">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/google-maps.jpg">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Onde estamos</h5>
                        <p class="card-text">Rua Padre Capelli, 230 Centro</p>
                        <p class="card-text mt-n1"> Porto Ferreira-SP.</p>
                        <a href="#" class="btn btn-primary">Iniciar GPS</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row  justify-content-center ">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/telefone.jpg">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Telefones</h5>
                        <p class="card-text">Fixo (19) 3585-3538</p>
                        <p class="card-text mt-n1">Celular (19) 9 9620-1509</p>
                        <a href="tel:551935853538" class="btn btn-primary">Ligar</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row  justify-content-end ">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/horarios.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Horário de Atendimento</h5>
                        <p class="card-text mt-2">Segunda à Sexta 8h ~ 18h</p>
                        <p class="card-text">Sábados 8h ~ 12h</p>
                        <br>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="row  justify-content-start ">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/facebook.jpg">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Rede Social</h5>
                        <p class="card-text">Curta nossa página</p>
                        <p class="card-text mt-n1">no Facebook.</p>
                        <a href="https://www.facebook.com/dedetizadoraddplim.dedetizadora?ref=bookmarks" target="_blank" class="btn btn-primary">Curtir</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row  justify-content-center ">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/email.jpeg">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">E-mail</h5>
                        <p class="card-text">Entre em contato por e-mail</p>
                        <p class="card-text mt-n1">nossa equipe entrará em contato</p>
                        <a href="mailto:ddplimdedetizadoracomercial@gmail.com?subject=Contato&nbsp;Site" class="btn btn-primary">Escrever</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row  justify-content-end ">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/orcam.jpg">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Orçamento</h5>
                        <p class="card-text">Solicite agora um</p>
                        <p class="card-text mt-n1"> orçamento sem compromisso</p>
                        <a href="https://api.whatsapp.com/send?phone=5519996201509&text=Orçamento pelo site DDPLIM DEDETIZADORA" 
    target="_blank" class="btn btn-primary">Solicitar</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>

  

  @endsection