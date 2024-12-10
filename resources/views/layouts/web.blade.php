<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waka Consulting</title>

    <link rel="icon" href="{{ asset('images/favicon (2).ico') }}" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Custom CSS -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/WakaLogo.png') }}" alt="Waka Consulting Logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
             <!-- Add Search Form in Navbar -->
                <div class="search-container" style="position: relative;">
                    <input type="text" id="search-bar" class="form-control" placeholder="Search for services..." autocomplete="off">
                    <ul id="search-results" class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; z-index: 1000; width: 100%;">
                        <!-- Dynamic results will appear here -->
                    </ul>
                </div>

                <div class="d-flex">
                    <a href="{{route('login')}}" class="btn btn-login me-2">Login</a>
                 <!--    
                    <a href="" class=" btn">Sign Up</a>
                -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main >
        @yield('content') 
    </main>

    <!-- Footer -->
        <footer class="py-3 my-4">
            <!-- Logo -->
            <div class="text-center mb-3">
                <a href="/">
                    <img src="{{ asset('images/WakaLogo.png') }}" alt="Waka Consulting Logo" width="120">
                </a>
            </div>
    
            <!-- Navigation Links -->
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="footer-item"><a href="{{ route('home') }}" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="footer-item"><a href="{{ route('service') }}" class="nav-link px-2 text-body-secondary">Services</a></li>
                <li class="footer-item"><a href="{{route('contact')}}" class="nav-link px-2 text-body-secondary">Contact</a></li>
            </ul>
    
            <!-- Social Media Links -->
            <div class="text-center mb-3">
                <a href="https://www.facebook.com/p/Waka-Consulting-61556479479508/?_rdr" target="_blank" class="text-body-secondary mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/waka_consulting/" target="_blank" class="text-body-secondary mx-2"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/wakaconsulting/mycompany/" target="_blank" class="text-body-secondary mx-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.behance.net/wakaconsultin" target="_blank" class="text-body-secondary mx-2"><i class="fab fa-behance"></i></a>
            </div>
    
            <!-- Copyright -->
            <p class="text-center text-body-secondary">© {{ date('Y') }} Waka Consulting. All rights reserved.</p>
        </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#search-bar').on('keyup', function () {
            let query = $(this).val();

            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('service.search') }}",
                    type: "GET",
                    data: { query: query },
                    success: function (data) {
                        let results = '';
                        if (data.length > 0) {
                            data.forEach(function (service) {
                                results += `
                                    <li class="dropdown-item">
                                        <a href="/services/${service.id}">${service.title}</a>
                                    </li>`;
                            });
                        } else {
                            results = '<li class="dropdown-item">No results found</li>';
                        }

                        $('#search-results').html(results).show();
                    },
                    error: function () {
                        $('#search-results').html('<li class="dropdown-item">Error fetching results</li>').show();
                    }
                });
            } else {
                $('#search-results').hide();
            }
        });

        // Hide results dropdown when clicking outside
        $(document).click(function (e) {
            if (!$(e.target).closest('.search-container').length) {
                $('#search-results').hide();
            }
        });
    });
</script>
</body>
</html>
