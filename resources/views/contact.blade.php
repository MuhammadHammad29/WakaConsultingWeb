@extends('layouts.web')

@section('content')

<div class="container fluid px-5 py-5">
    <!-- Header Section with Purple Accent Line -->
    <section class="text-center py-5">
        <h1 class="display-4 text-uppercase">Contact Us</h1>
        <hr class="mx-auto">
        <p class="lead mt-3">Professional services tailored to your digital transformation needs.</p>
    </section>

    <!-- Contact Form Section with Gradient Background -->
    <section class="py-5" style="background: linear-gradient(to bottom right, #f3f3f3, #e6e6fa); border-radius: 8px;">
        <h2 class="text-center mb-4">Get in Touch</h2>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6 mb-4">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn ">Send Message</button>
                </form>
            </div>
            
            <!-- Contact Information with Icons -->
            <div class="col-md-6 mb-4">
                <h4>Contact Information</h4>
                <p><i class="fas fa-phone-alt me-2"></i> +92 (341) 2497593</p>
                <p><i class="fas fa-envelope me-2"></i> consulting.waka@gmail.com</p>
                <p><i class="fas fa-map-marker-alt me-2"></i> R2PM+FCR, Khayaban-e-Iqbal Rd, 
                    Block 8 Frere Town, Karachi, Karachi City, Sindh 75600, Pakistan</p>
                <div class="my-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.8076774486553!2d67.03094597414012!3d24.83624984622818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dc59d94aae5%3A0xd52c8da8236bbcf3!2sGlass%20Tower!5e0!3m2!1sen!2s!4v1730065519244!5m2!1sen!2s"
                     width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section with Collapsible Items -->
    <section class="py-5">
        <h2 class="text-center mb-4" >Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion"  >
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne" >
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background: linear-gradient(to right, #5a2d82, #2d5a82);color: #fff;">
                        What services do you offer?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer a range of digital services including web development, design, and IT consulting.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I get a quote?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Please fill out our contact form or reach out directly, and we will be in touch with a customized quote.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do you offer support after project completion?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we provide post-project support to ensure your solution functions smoothly.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
