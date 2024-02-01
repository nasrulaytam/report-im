<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> {{ __('PNM - Report System') }} </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">

        <div class="header_bottom">
            <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ route('landing') }}">
                <span>
                    {{ __('PNM - Report System') }}
                </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif --}}
                        @endauth
                    @endif
                </ul>
                </div>
            </nav>
            </div>
        </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
        <div class="container ">
            <div class="row">
            <div class="col-md-6 ">
                <div class="detail-box">
                <h1>
                    Reminder and <br>
                    Monitoring <br>
                    Report Services
                </h1>
                <p>
                    A reminder and monitoring report system that helps users to remember tasks or activities that need to be done, as well as to track the progress of those tasks or activities.
                    This application can help users to complete work on time.
                </p>
                <a href="">
                    Contact Us
                </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-box">
                <img src="{{ asset('img/home.png') }}" alt="">
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- feature section -->
    <section class="feature_section">
        <div class="container">
        <div class="feature_container">
            <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512">
                <path d="M160 64c0-11.8-6.5-22.6-16.9-28.2s-23-5-32.8 1.6l-96 64C-.5 111.2-4.4 131 5.4 145.8s29.7 18.7 44.4 8.9L96 123.8V416H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H160V64z"/></svg>
            </div>
            <h5 class="name">
                Monthly Report
            </h5>
            </div>
            <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                <path d="M0 64C0 46.3 14.3 32 32 32H272c13.2 0 25 8.1 29.8 20.4s1.5 26.3-8.2 35.2L162.3 208H184c75.1 0 136 60.9 136 136s-60.9 136-136 136H105.4C63 480 24.2 456 5.3 418.1l-1.9-3.8c-7.9-15.8-1.5-35 14.3-42.9s35-1.5 42.9 14.3l1.9 3.8c8.1 16.3 24.8 26.5 42.9 26.5H184c39.8 0 72-32.2 72-72s-32.2-72-72-72H80c-13.2 0-25-8.1-29.8-20.4s-1.5-26.3 8.2-35.2L189.7 96H32C14.3 96 0 81.7 0 64z"/></svg>
            </div>
            <h5 class="name">
                Quarterly Report
            </h5>
            </div>
            <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                <path d="M232.4 84.7c11.4-13.5 9.7-33.7-3.8-45.1s-33.7-9.7-45.1 3.8L38.6 214.7C14.7 242.9 1.1 278.4 .1 315.2c0 1.4-.1 2.9-.1 4.3c0 .2 0 .3 0 .5c0 88.4 71.6 160 160 160s160-71.6 160-160c0-85.5-67.1-155.4-151.5-159.8l63.9-75.6zM256 320A96 96 0 1 1 64 320a96 96 0 1 1 192 0z"/></svg>
            </div>
            <h5 class="name">
                Semester Report
            </h5>
            </div>
            <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg>
            </div>
            <h5 class="name">
                Annual Report
            </h5>
            </div>
        </div>
        </div>
    </section>

    <!-- end feature section -->

    <!-- about section -->

    <section class="about_section layout_padding-bottom">
        <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
            <div class="detail-box">
                <h2>
                About us
                </h2>
                <p>
                <b>PT PNM Investment Management (PNM-IM)</b> is an investment management company engaged in mutual fund management and investment advisory services in the capital markets industry.
                PNM-IM has a license as an Investment Manager based on BAPEPAM Decree No. Kep-01/PM/MI/1998 dated 27 January 1998. The Company also has a license as an Investment Advisor based on the Decree of the Board of Commissioners of the Financial Services Authority Number: KEP-16/D.04/2019 dated 2 April 2019
                </p>
                <a href="https://www.pnmim.com/about" target="_blank">
                Read More
                </a>
            </div>
            </div>
            <div class="col-lg-7 col-md-6">
            <div class="img-box">
                <img src="{{ asset('img/team.jpg') }}" alt="">
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- end about section -->


    <!-- professional section -->

    <section class="professional_section layout_padding">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="img-box">
                <img src="{{ asset('img/team1.png') }}" alt="">
            </div>
            </div>
            <div class="col-md-6 ">
            <div class="detail-box">
                <h2>
                We Provide Professional <br>
                Investment Management
                </h2>
                <p>
                We offer a variety of Mutual Fund, Stock, and SBN investment products.
                Investors can choose a product that suitable for their investment goals,
                risk profile, and investment time horizon.
                </p>
                <a href="https://sijago.pnmim.com/" target="_blank">
                PNM Sijago
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- end professional section -->

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container ">
        <div class="heading_container heading_center">
            <h2> Our Services </h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto">
            <div class="box ">
                <div class="img-box">
                <img src="{{ asset('img/reminder.png') }}" alt="" />
                </div>
                <div class="detail-box">
                <h5>
                    Reminder
                </h5>
                <p>
                    can be used to reminders for tasks or activities that need to be done.
                    Reminders can be in the form of notifications, emails, or text messages.
                </p>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-md-4 mx-auto">
            <div class="box ">
                <div class="img-box">
                <img src="{{ asset('img/report.png') }}" alt="" />
                </div>
                <div class="detail-box">
                <h5>
                    Report
                </h5>
                <p>
                    can be used to track and display reports on tasks or activities that have been completed, still pending,
                    and tasks that have been delayed.
                </p>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-md-4 mx-auto">
            <div class="box ">
                <div class="img-box">
                <img src="{{ asset('img/oversees.png') }}" alt="" />
                </div>
                <div class="detail-box">
                <h5>
                    Oversees
                </h5>
                <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
            View More
            </a>
        </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- client section

    <section class="client_section ">
        <div class="container">
        <div class="heading_container heading_center">
            <h2>
            What Our Clients Say
            </h2>
        </div>
        <div class="carousel-wrap layout_padding2-top ">
            <div class="owl-carousel">
            <div class="item">
                <div class="box">
                <div class="client_id">
                    <div class="img-box">
                    <img src="{{ asset('img/client-1.jpg') }}" alt="">
                    </div>
                    <div class="client_detail">
                    <div class="client_info">
                        <h6>
                        Jorch morik
                        </h6>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="client_text">
                    <p>
                    chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    </p>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                <div class="client_id">
                    <div class="img-box">
                    <img src="{{ asset('img/client-2.jpg') }}" alt="">
                    </div>
                    <div class="client_detail">
                    <div class="client_info">
                        <h6>
                        Jorch morik
                        </h6>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="client_text">
                    <p>
                    chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    </p>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                <div class="client_id">
                    <div class="img-box">
                    <img src="{{ asset('img/client-1.jpg') }}" alt="">
                    </div>
                    <div class="client_detail">
                    <div class="client_info">
                        <h6>
                        Jorch morik
                        </h6>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="client_text">
                    <p>
                    chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    </p>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                <div class="client_id">
                    <div class="img-box">
                    <img src="{{ asset('img/client-2.jpg') }}" alt="">
                    </div>
                    <div class="client_detail">
                    <div class="client_info">
                        <h6>
                        Jorch morik
                        </h6>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="client_text">
                    <p>
                    chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    end client section -->

    <!-- contact section

    <section class="contact_section layout_padding">
        <div class="container">
        <div class="heading_container">
            <h2>
            Contact Us
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
            <form action="">
                <div>
                <input type="text" placeholder="Name" />
                </div>
                <div>
                <input type="text" placeholder="Phone Number" />
                </div>
                <div>
                <input type="email" placeholder="Email" />
                </div>
                <div>
                <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="d-flex ">
                <button>
                    SEND
                </button>
                </div>
            </form>
            </div>
            <div class="col-md-6">
            <div class="map_container">
                <div class="map">
                <div id="googleMap" style="width:100%;height:100%;"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    end contact section -->


    <!-- info section -->
    <section class="info_section ">
        <div class="container">
        <h4>
            Get In Touch
        </h4>
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <div class="info_items">
                <div class="row">
                <div class="col-md-4">
                    <a href="https://maps.app.goo.gl/JK3oKUC7iGcoFUJ67" target="_blank">
                    <div class="item ">
                        <div class="img-box ">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <p>
                        PT PNM Investment Management
                        Menara PNM Lt.15,
                        Jl. Kuningan Mulia No. 9F
                        Kuningan Centre Lot 1 (Kav 1)
                        Karet - Setiabudi
                        Jakarta Selatan 12920
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://wa.me/6281282526880?text=Halo%20PT%20PNM%20Investment%20Management,%20saya%20ingin%20bertanya%21" target="_blank">
                    <div class="item ">
                        <div class="img-box ">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </div>
                        <p>
                        (+62) 6281282526880
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://mail.google.com/mail/u/reksadana@pnmim.com" target="_blank">
                    <div class="item ">
                        <div class="img-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <p>
                        reksadana@pnmim.com
                        </p>
                    </div>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="social-box">
        <h4>
            Follow Us
        </h4>
        <div class="box">
            <a href="https://twitter.com/PNMIM" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://youtube.com/@pnmsijago?feature=shared" target="_blank">
            <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://instagram.com/sijago_pnmim?igshid=MzRlODBiNWFlZA==" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
        </div>
    </section>



    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
        <p>
            &copy; <span id="displayDateYear"></span> All Rights Reserved By
            <a href="https://www.linkedin.com/in/zakiyah-humaira-90aa031ba/" target="_blank">Zakiyah Humaira</a>
        </p>
        </div>
    </footer>
    <!-- footer section -->

    <script src=" {{ asset('js/jquery-3.4.1.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src=" {{ asset('js/custom.js') }} "></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->


</body>

</html>
