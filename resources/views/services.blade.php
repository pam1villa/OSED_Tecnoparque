@extends('layouts.guest')
@section('content')

<div class="row">
    {{-- <div class="col-md-4 mt-4">
        <div class="card bg-cover text-center" style="background-image: url('https://demos.creative-tim.com/test/argon-dashboard-pro/assets/img/img-3.jpg')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Limpieza a profundidad</h3>
            <p class="text-white">
                Si así lo consideras, incluye la limpieza de griferías, sanitarios y mamparas en profundidad. Como en la cocina, vaciar sus muebles y baldas, ...
            </p>

            <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button> 


            <label class="badge badge-light text-white">Agenda  ¡ Ya !</label>
            <br>
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                </svg>
            </button>

        </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>

    </div> --}}

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/ASPIRAR.png')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Limpieza a profundidad</h3>
            <p class="text-white">
                Si así lo consideras, incluye la limpieza de griferías, sanitarios y mamparas en profundidad. 
            </p>


            <a href="#" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                </svg>
                Agenda  ¡ Ya !
            </a>

        </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/planchado2.png')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Planchado</h3>
            <p class="text-white">
                Planchar la ropa ayuda a matar diferentes bacterias, ácaros y gérmenes que pueden esconderse entre las fibras de la tela. 
            </p>

            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                </svg>
                Agenda  ¡ Ya !
            </button>

        </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image:  url(' {{asset('img/imgServices/desinfectar.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white"> Desinfección</h3>
            <p class="text-white">
                Una desinfección correcta y realizada por expertos puede ayudar a prevenir el contagio de cualquier virus, eliminando el 99%            </p>
            <a href="#" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                </svg>
                Agenda  ¡ Ya !
            </a>       
         </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image:  url(' {{asset('img/imgServices/limpieza1.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Lavado de ropa</h3>
            <p class="text-white">
                La mejor forma de prevenir este tipo de enfermedades en bebés, niños y adultos, además de tener un buen aseo personal es lavar la ropa con un jabón que elimine la mugre, sudor y manchas que generan bacterias.
            </p>
            <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button>
        </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/limpieza1.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Cuidado de niños</h3>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor. Vestibulum quis purus non dui dignissim sodales. Aliquam </p>
            <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button>
        </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="card bg-cover text-below" style="background-image: url(' {{asset('img/imgServices/limpieza1.jpg')}}')" >
        <div class="card-body z-index-2 py-6 pt-10">
            <h3 class="text-white">Cocina básica</h3>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla eros at tincidunt auctor. Vestibulum quis purus non dui dignissim sodales.             </p>
            <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button>
        </div>
        <div class="mask bg-gradient-primary border-radius-lg"></div>
        </div>
    </div>

@endsection