@extends('template')

    @section('title', 'Qbits | home')

    @section('body')
    <div class="body_home_cover bg_home_img">
        <div class="container-fliud text-center">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="name_home">Q bits inc.</h1>
                    <h2 class="descripcion_home">Soluciones tecnologicas al alcance de todos</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center service">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card_home">
                    <img class="img_card" src="{{ asset('image/logo/qbits.png') }}" alt="qbits logo">

                    <h3 class="card_name">Qbits Service</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, ducimus aliquid a est nobis, debitis maxime soluta ipsa fugiat accusamus atque. Voluptatem ducimus nesciunt aliquam sint alias at, quam nihil ratione iusto non ipsam facere!</p>
                </div>
            </div>

            <div class="col-4">
                <div class="card_home">
                    <img class="img_card" src="{{ asset('image/logo/qbits.png') }}" alt="qbits logo">

                    <h3 class="card_name">Qbits Service</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, ducimus aliquid a est nobis, debitis maxime soluta ipsa fugiat accusamus atque. Voluptatem ducimus nesciunt aliquam sint alias at, quam nihil ratione iusto non ipsam facere!</p>
                </div>
            </div>

            <div class="col-4">
                <div class="card_home">
                    <img class="img_card" src="{{ asset('image/logo/qbits.png') }}" alt="qbits logo">

                    <h3 class="card_name">Qbits Service</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, ducimus aliquid a est nobis, debitis maxime soluta ipsa fugiat accusamus atque. Voluptatem ducimus nesciunt aliquam sint alias at, quam nihil ratione iusto non ipsam facere!</p>
                </div>
            </div>

        </div>
    </div>

    <div class="about">
        <div class="container text-center">
            <div class="row ">
                <div class="col-6 about_description">
                    <h1>¿Quienes somos?</h1>
                    <p class="about_description_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid ipsa molestiae mollitia quia pariatur, nesciunt ut ratione, officia tenetur, temporibus natus! Magnam error inventore optio voluptatem cum doloremque unde omnis impedit non qui perferendis.</p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('image/logo/qbits.png') }}" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <marquee behavior="" direction="">
        <div class="business">
            <img src="{{ asset('image/logo/qbits_inc.png') }}" alt="" class="logo_business">
            <img src="{{ asset('image/logo/qbits_inc.png') }}" alt="" class="logo_business">
            <img src="{{ asset('image/logo/qbits_inc.png') }}" alt="" class="logo_business">
            <img src="{{ asset('image/logo/qbits_inc.png') }}" alt="" class="logo_business">
            <img src="{{ asset('image/logo/qbits_inc.png') }}" alt="" class="logo_business">
        </div>
        </marquee>
    </div>

    <div class="container text-center">
        <h2 class="">SOLUCIONES</h2>
        <div class="row">
            <div class="col-3 card_project">
                <img src="{{ asset('image/logo/qbits.png') }}" alt="">
                <h3>Q bits Dev</h3>
            </div>
            <div class="col-3 card_project">
                <img src="{{ asset('image/home/kasad.png') }}" alt="">
                <h3>Condominios</h3>
            </div>
            <div class="col-3 card_project">
                <img src="{{ asset('image/home/lock.png') }}" alt="">
                <h3>Lock</h3>
            </div>
            <div class="col-3 card_project">
                <img src="{{ asset('image/home/gym.png') }}" alt="">
                <h3>Gym</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col mapa">
                mapa
            </div>
        </div>
    </div>

    <div class="container-fluid contact">
        <div class="container">
            <div class="row text-center">
                <div class="col mt-5">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row contact_info">
                <div class="col-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione praesentium officiis voluptatum nulla, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione praesentium officiis voluptatum nulla,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione praesentium officiis voluptatum nulla,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione praesentium officiis voluptatum nulla, 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione praesentium officiis voluptatum nulla,
                </div>
                <div class="col-6 contact_info_form">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Asunto</label>
                            <textarea type="text" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn_contact_form btn btn-block">enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        
    </div>


    
    @endsection
