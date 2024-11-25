@extends('layouts.web')

@section('content')

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/Banner 1.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Banner 2.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Banner 3.png') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  
    <!-- Client Logos Section -->
    <section class="client-logos py-5 bg-light text-center">
      <h2>Our Happy Customers</h2>
      <div class="wrapper">
          <div class="item item1"></div>
          <div class="item item2"></div>
          <div class="item item3"></div>
          <div class="item item4"></div>
          <div class="item item5"></div>
          <div class="item item6"></div>
          <div class="item item7"></div>
          <div class="item item8"></div>
        </div>
  </section>

  
  <!-- Services Overview Section -->
<section class="services-overview py-5 text-center bg-light text-dark">
  <h2 class="mb-4 text-purple">What We Offer</h2>
  <div class="row mt-4">
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 h-100">
              <img src="{{ asset('images/designicon.png') }}" class="card-img-top" alt="Design Services" style="height: 200px; object-fit: cover;">
              <div class="card-body">
                  <h3 class="card-title text-purple">Design Services</h3>
                  <p class="card-text">UI/UX Design, Logo Design, Graphic Design, and more.</p>
                  <a href="{{route('design')}}" class="btn">Learn More</a>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 h-100">
              <img src="{{ asset('images/Developmenticon.png') }}" class="card-img-top" alt="Development Services" style="height: 200px; object-fit: cover;">
              <div class="card-body">
                  <h3 class="card-title text-purple">Development Services</h3>
                  <p class="card-text">Custom Websites, E-Commerce Solutions, and more.</p>
                  <a href="{{route('development')}}" class="btn">Learn More</a>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 h-100">
              <img src="{{ asset('images/Dataicon.png') }}" class="card-img-top" alt="Marketing Services" style="height: 200px; object-fit: cover;">
              <div class="card-body">
                  <h3 class="card-title text-purple">Marketing Services</h3>
                  <p class="card-text">SEO, Content Marketing, Social Media, and more.</p>
                  <a href="{{route('marketing')}}" class="btn">Learn More</a>
              </div>
          </div>
      </div>
  </div>
</section>


<!--Recent Projects Section-->

<section id="tranding">
    <div class="container">
      <h2 class="text-center">Our Recent Work</h2>
    </div>
    <div class="container">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{ asset('images/Ai.png')}}" alt="Ai">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  AI Project
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{ asset('images/Eduplay.jpg')}}" alt="EduPlay">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  EduPlay
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{ asset('images/PetVet.png')}}" alt="PetVet">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  PetVet
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{ asset('images/TravelApp.png')}}" alt="TravelApp">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Travello
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{ asset('images/YogaCaseStudy.jpg')}}" alt="YogaApp">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  YogaApp
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{asset('images/Saas.png')}}" alt="Saas Dashboard">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  SAAS Dashboard
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="{{asset('images/DataValley.png')}}" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  DataValley
                </h2>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
        </div>

        <div class="tranding-slider-control">
          <div class="swiper-button-prev slider-arrow">
            <ion-icon name="arrow-back-outline"></ion-icon>
          </div>
          <div class="swiper-button-next slider-arrow">
            <ion-icon name="arrow-forward-outline"></ion-icon>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>

  <!--Testimonial Section-->

  <section>
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h2 class="mb-4">Testimonials</h2>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
          numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur veniam.
        </p>
      </div>
    </div>
  
    <div class="row text-center d-flex align-items-stretch">
      <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" ></div>
          <div class="avatar mx-auto bg-white">
            <img src="{{ asset('images/review1.webp') }}"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Maria Smantha</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
              consectetur adipisicing elit.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" ></div>
          <div class="avatar mx-auto bg-white">
            <img src="{{ asset('images/review2.webp') }}"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Lisa Cudrow</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
              repudi mollitia architecto.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up"></div>
          <div class="avatar mx-auto bg-white">
            <img src="{{ asset('images/review3.webp') }}"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">John Smith</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
              aliquam repellat rem unde ducimus.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
