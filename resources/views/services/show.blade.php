@extends('layouts.web') 

@section('content')
<section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h1 class="mb-4">{{ $data->title }}</h1>
      <h3 ><strong>Tagline:</strong> {{ $data->tagline }}</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        {{ $data->description }}</p>
</section>

<!--Recent Projects Section-->

<section id="tranding">
  <div class="container">
    <h2 class="text-center">Our Recent Work</h2>
  </div>
  <div class="container">
    <div class="swiper tranding-slider">
      <div class="swiper-wrapper">
        @foreach ($data->projects as $project)
        <!-- Slide-start -->
        <div class="swiper-slide tranding-slide">
          <a href="{{ $project->figma_link }}" target="_blank" rel="noopener noreferrer" >
          <div class="tranding-slide-img">
            <img src="{{ asset('storage/uploads/' . $project->picture) }}" alt="{{ $project->title }}" width="150">
          </div>
          <div class="tranding-slide-content">
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                {{ $project->title }}
              </h2>
            </div>
          </div>
          </a>
        </div>
        <!-- Slide-end -->
        @endforeach
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

<!-- Hero Section with Full Width Background -->
<section class="hero-section text-center text-white py-5">
    <h1 class="display-4 h1cta">Our Expertise, Your Success</h1>
    <p class="lead">Comprehensive solutions to transform your business.</p>
    <a href="{{ route('contact') }}" class="btn btn-lg mt-3">Get in Touch</a>
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
  
    <!-- Service Process Steps -->
    <section class="process-steps my-5 text-center">
        <h2 class="mb-4">Our Process</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-comments fa-2x mb-3"></i>
                        <h3 class="card-title">Step 1: Consultation</h3>
                        <p class="card-text">Understanding your vision.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-map fa-2x mb-3"></i>
                        <h3 class="card-title">Step 2: Planning</h3>
                        <p class="card-text">Strategizing for success.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-code fa-2x mb-3"></i>
                        <h3 class="card-title">Step 3: Development</h3>
                        <p class="card-text">Bringing ideas to life.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-rocket fa-2x mb-3"></i>
                        <h3 class="card-title">Step 4: Launch</h3>
                        <p class="card-text">Delivering results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Packages Section -->
    <section class="my-5 text-center">
        <h2 class="mb-4">Our Packages</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-star fa-2x mb-3 text-purple"></i>
                        <h5 class="card-title">Basic Package</h5>
                        <p class="card-text">Starting from <strong>$500</strong></p>
                        <ul class="list-unstyled">
                            <li>Basic Website Design</li>
                            <li>Responsive Layout</li>
                        </ul>
                        <a href="#" class="btn">Choose Package</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-clipboard-check fa-2x mb-3 text-purple"></i>
                        <h5 class="card-title">Standard Package</h5>
                        <p class="card-text">Starting from <strong>$1000</strong></p>
                        <ul class="list-unstyled">
                            <li>Website Design + Development</li>
                            <li>SEO Optimization</li>
                        </ul>
                        <a href="#" class="btn">Choose Package</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-gem fa-2x mb-3 text-purple"></i>
                        <h5 class="card-title">Premium Package</h5>
                        <p class="card-text">Starting from <strong>$2000</strong></p>
                        <ul class="list-unstyled">
                            <li>Full Website + Marketing</li>
                            <li>Priority Support</li>
                        </ul>
                        <a href="#" class="btn">Choose Package</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection