{{-- @extends('Layouts.master')

@section('static') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel E-Commerce Project by Sam">
          
    <!-- title -->
    <title>{{ isset($item) ? $item->name : 'Products' }}</title> 
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- footer -->
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <!-- vendor bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <!-- animations -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/vendor/slick/slick.css') }}">
    <!-- main product styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Products/css/util.css') }}">
    <!-- custom product styles -->
    <link rel="stylesheet" href="{{ asset('assets/Products/css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('shop') }}">Shop</a></li>
                            <li><a href="{{ route('news') }}">News</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end -->
                <div class="col-lg-3 col-md-3">
                    <!-- Login Button -->
                    <div class="button-container">
                        <a href="{{ route('login') }}">
                            <button class="Btn" style="color: #f28123">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512">
                                        <path 
                                        d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text">Login</div>
                            </button>
                        </a>
                    </div>
                    <li class="header-icons">
                        <a class="shopping-cart" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                        <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    </li>
                </div>
            </div>
        </div>
    </div>

    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>{{ $item->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{ url($item->imgpath) }}" alt="{{ $item->name }}">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $item->name }}</h3>
                    <p class="single-product-pricing"><span>Per Unit</span> ${{ $item->price }}</p>
                    <p>{{ $item->description }}</p>
                    <div class="single-product-form">
                        <td class="product-quantity">
                            <input type="number" value="1" placeholder="0" class="quantityInput" data-price="{{ $item->price }}" data-item-id="{{ $item->id }}" min="1">
                        </td>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                            <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                        <p><strong>Category: </strong>{{ $item->category }}</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->

    <div class="section-title" style="margin-top: 30px;">
        <h3><span class="orange-text">Our</span> Partners</h3>
        <p>"Explore our collaborations with leading computer companies such as Alienware, Nvidia, Asus, Lian Li, and more. Discover top-quality components and products!"</p>
    </div>
    
    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/alienware.png') }}" alt="Alienware">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/Nvidia.png') }}" alt="Nvidia">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/asus.png') }}" alt="Asus">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/lian li.png') }}" alt="Lian Li">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/logo.png') }}" alt="Logo">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/Intel.png') }}" alt="Intel">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/Sony.png') }}" alt="Sony">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/Logitech.png') }}" alt="Logitech">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->
    
    <!-- footer -->
    <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                        <div class="dk-footer-box-info">
                            <a href="index.html" class="footer-logo">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="footer_logo" class="img-fluid">
                            </a>
                            <p class="footer-info-text" style="color: white">
                                At Med Tech, we're your tech partner, offering the latest in PC components and hardware
                            </p>
                            <div class="footer-social-link">
                                <h3>Follow us</h3>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Social link -->
                        </div>
                        <!-- End Footer info -->
                    </div>
                    <!-- End Col -->
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-us">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-o" aria-hidden="true"></i>
                                    </div>
                                    <!-- End contact Icon -->
                                    <div class="contact-info">
                                        <h3>Cairo , Egypt</h3>
                                        <p style="color: white">Visit Us</p>
                                    </div>
                                    <!-- End Contact Info -->
                                </div>
                                <!-- End Contact Us -->
                            </div>
                            <!-- End Col -->
                            <div class="col-md-6">
                                <div class="contact-us contact-us-last">
                                    <div class="contact-icon">
                                        <i class="fas fa-volume-control-phone" aria-hidden="true"></i>
                                    </div>
                                    <!-- End contact Icon -->
                                    <div class="contact-info" >
                                        <h3>01234567890</h3>
                                        <p style="color: white"> Give us a call</p>
                                    </div>
                                    <!-- End Contact Info -->
                                </div>
                                <!-- End Contact Us -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Contact Row -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget footer-left-widget">
                                    <div class="section-heading" style="color: white">
                                        <h3>Useful Links</h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">Shop</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact us</a>
                                            
                                        </li>
    
                                        <li>
                                            <a href="{{ route('news') }}">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Footer Widget -->
                            </div>
                            <!-- End col -->
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget">
                                    <div class="section-heading">
                                        <h3>Subscribe</h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                    <p style="color: white">
                                        Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="col dk-footer-form">
                                                <input type="email" class="form-control" placeholder="Email Address">
                                                <button type="submit">
                                                    <i class="far fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End form -->
                                </div>
                                <!-- End footer widget -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Widget Row -->
            </div>
            <!-- End Contact Container -->
    
    
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Copyright © 2024, All Right Reserved </span>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="copyright-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Copyright Container -->
            </div> 
            <!-- End Copyright -->
            
            <!-- Back to top -->
            <div id="back-to-top" class="back-to-top">
                <button class="btn btn-dark" title="Back to Top" style="display: block;">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
            <!-- End Back to top -->
    </footer>

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('assets/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- product specific js -->
    <script src="{{ asset('assets/Products/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/Products/js/slick-custom.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/Products/vendor/sweetalert/sweetalert.min.js') }}"></script>


    <script>
        // Function to update total price in the summary
        function updateTotal() {
            var subtotal = 0;
            var priceElements = document.querySelectorAll('.product-total[id^="price-"]');
            priceElements.forEach(function(priceElement) {
                subtotal += parseFloat(priceElement.innerText.replace('$', ''));
            });
            document.getElementById('subtotal').innerText = '$' + subtotal.toFixed(2);
    
            var shipping = parseFloat(document.getElementById('shipping').innerText.replace('$', ''));
            document.getElementById('total').innerText = '$' + (subtotal + shipping).toFixed(2);
        }
    
        // Get all input elements with the class 'quantityInput'
        var quantityInputs = document.querySelectorAll('.quantityInput');
    
        // Loop through each input element
        quantityInputs.forEach(function(input) {
            // Add event listener to each input field
            input.addEventListener('change', function() {
                // Parse the input value as a number
                var quantity = parseInt(this.value);
    
                // If the quantity is less than 1, set it to 1
                if (quantity < 1) {
                    this.value = 1;
                    quantity = 1;
                }
    
                // Get the original price from data attribute
                var price = parseFloat(this.getAttribute('data-price'));
    
                // Calculate the new price (original price multiplied by quantity)
                var newPrice = price * quantity;
    
                // Find the corresponding price element and update it
                var priceElement = document.getElementById('price-' + this.getAttribute('data-item-id'));
                priceElement.innerText = '$' + newPrice.toFixed(2);
    
                // Update the total price
                updateTotal();
            });
        });
    </script>
</body>
</html>

    {{-- @endsection --}}
