@extends('layouts.web')

@section('content')

<div class="container-fluid px-5 py-5">
    <!-- Services Overview Section -->
    <section class="services-overview py-5 text-center bg-light text-dark">
        <h1 class="display-4 text-uppercase">Our Services</h1>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/designicon.png') }}" class="card-img-top" alt="Design Services" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title text-purple">Design Services</h3>
                        <p class="card-text">UI/UX Design, Logo Design, Graphic Design, and more.</p>
                        <a href="{{ route('services.show', ['id' => 5]) }}" class="btn btn-purple">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/Developmenticon.png') }}" class="card-img-top" alt="Development Services" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title text-purple">Development Services</h3>
                        <p class="card-text">Custom Websites, E-Commerce Solutions, and more.</p>
                        <a href="{{route('development')}}" class="btn btn-purple">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/Dataicon.png') }}" class="card-img-top" alt="Marketing Services" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title text-purple">Marketing Services</h3>
                        <p class="card-text">SEO, Content Marketing, Social Media, and more.</p>
                        <a href="{{route('marketing')}}" class="btn btn-purple">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Service Highlights Section -->
    <section class="my-5">
        <h2 class="text-center mb-4">Why Choose Us?</h2>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('images/Collage.png') }}" class="d-block mx-lg-auto img-fluid rounded" alt="High Quality Services" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">High Quality & Innovation</h2>
                    <p class="lead">We blend creativity with technology, delivering top-quality results that drive your success. Our experienced team provides innovative and effective solutions tailored to your needs.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="/contact" class="btn btn-lg px-4 me-md-2">Get Started</a>
                        <button type="button" class="btn btn-lg px-4">Learn More</button>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
   <!-- Service Process Steps -->
<section class="process-steps my-5 text-center">
    <h2 class="mb-4">Our Process</h2>
    <div class="row" >
        <div class="col-md-3 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body" >
                    <i class="fas fa-comments fa-2x mb-3"></i>
                    <h3 class="card-title">Step 1: Consultation</h3>
                    <p class="card-text">Understanding your vision.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body" >
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

<!-- Portfolio Showcase Section -->
 <section class="my-5">
    <h2 class="text-center mb-4">Our Work</h2>
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <img src="{{ asset('images/Ai.png') }}" class="img-fluid rounded shadow-sm" alt="Portfolio 1">
            <p class="mt-2">Design Project</p>
        </div>
        <div class="col-md-3 mb-4">
            <img src="{{ asset('images/Eduplay.jpg') }}" class="img-fluid rounded shadow-sm" alt="Portfolio 2">
            <p class="mt-2">Web Development Project</p>
        </div>
        <div class="col-md-3 mb-4">
            <img src="{{ asset('images/TravelApp.png') }}" class="img-fluid rounded shadow-sm" alt="Portfolio 3">
            <p class="mt-2">Marketing Campaign</p>
        </div>
        <div class="col-md-3 mb-4">
            <img src="{{ asset('images/PetVet.png') }}" class="img-fluid rounded shadow-sm" alt="Portfolio 4">
            <p class="mt-2">Marketing Campaign</p>
        </div>
    </div>
</section>



   <!-- Hero Section with Full Width Background -->
   <section class="hero-section text-center text-white py-5">
    <h1 class="display-4 h1cta">Our Expertise, Your Success</h1>
    <p class="lead">Comprehensive solutions to transform your business.</p>
    <a href="{{ route('contact') }}" class="btn btn-lg mt-3">Get in Touch</a>
</section>


@endsection
