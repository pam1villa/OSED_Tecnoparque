@extends('layouts.guest')
@section('carrusel')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(' {{asset('img/welcome.png')}}')">
          <span class="mask bg-gradient-dark"></span>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">OSED</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Profesionales en limpieza</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="carousel-item">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(' {{asset('img/iniciosesion.png')}}')">
          <span class="mask bg-gradient-dark"></span>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">OSED</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Desinfección</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(' {{asset('img/iniciosesion2.png')}}')">
          <span class="mask bg-gradient-dark"></span>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">OSED</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Servicios confiables</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                <button type="button" class="btn bg-gradient-primary">Agenda ¡ Ya !</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="min-vh-75 position-absolute w-100 top-0">
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>



  <div class="accordion-1">
    <div class="container">
      <div class="row my-5">
        <div class="col-md-6 mx-auto text-center">
          <h2>Preguntas Frecuentes</h2>
          <p>A lot of people don’t appreciate the moment until it’s passed. I'm not trying my hardest, and I'm not trying to do </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="accordion" id="accordionRental">
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingOne">
                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  How do I order?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                <div class="accordion-body text-sm opacity-8">
                  We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game
                  of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingTwo">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How can i make the payment?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  It really matters and then like it really doesn’t matter. What matters is the people who are sparked by it. And the people who are like offended by it, it doesn’t matter. Because it's about motivating the doers. Because I’m here to follow my dreams and inspire other people to follow their dreams, too.
                  <br>
                  We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingThree">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How much time does it take to receive the order?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now to be okay to be the greatest you. Would you believe in what you believe in, if you were the only one who believed it?
                  If everything I did failed - which it doesn't, it actually succeeds - just the fact that I'm willing to fail is an inspiration. People are so scared to lose that they don't even try. Like, one thing people can't say is that I'm not trying, and I'm not trying my hardest, and I'm not trying to do the best way I know how.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingFour">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Can I resell the products?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  I always felt like I could do anything. That’s the main thing people are controlled by! Thoughts- their perception of themselves! They're slowed down by their perception of themselves. If you're taught you can’t do anything, you won’t do anything. I was taught I could do everything.
                  <br><br>
                  If everything I did failed - which it doesn't, it actually succeeds - just the fact that I'm willing to fail is an inspiration. People are so scared to lose that they don't even try. Like, one thing people can't say is that I'm not trying, and I'm not trying my hardest, and I'm not trying to do the best way I know how.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingFifth">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                  Where do I find the shipping details?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill. I’m not really specifically talented at anything except for the ability to learn. That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you can’t learn anything from a compliment.
                  I always felt like I could do anything. That’s the main thing people are controlled by! Thoughts- their perception of themselves! They're slowed down by their perception of themselves. If you're taught you can’t do anything, you won’t do anything. I was taught I could do everything.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection