<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VFD Group |  Global Network &#8211; Worldwide Strength">
    <meta name="author" content="VFD Group">
    <title>Anchoria Asset Management &#8211; Asset Management</title>
    <!--favicicon-->
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('css/Assets/animate.min.css') }}" type="text/css" rel="stylesheet" />

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top-nav mb-md-5 py-2">
        <div class="container-fluid">
            <!-- Navbar brand -->

            <a class="navbar-brand" href="index">
                <img src="{{ asset('img/subs-white-Anchoria.png') }}" width="160" class="img-fluid d-none d-md-block d-lg-block"
                    id="main_logo" alt="VFD Group Logo">
                <img src="{{ asset('img/aamblacklogo.png') }}" width="160" class="img-fluid d-lg-none" id="main_logo"
                    alt="VFD Group Logo">
            </a>


            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item px-md-2 my-2 my-md-0 active-now">
                        <a class="nav-link bold" href="index">Home</a>
                    </li>

                    <li class="nav-item dropdown px-md-2 my-2 my-md-0">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu nav-dropdown-menu" aria-labelledby="aboutDropdown">
                        <a class="dropdown-item" href="{{url('who')}}">Who We Are</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('leadership') }}">Leadership</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown px-md-2 my-2 my-md-0">
                        <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products & Services
                        </a>
                        <div class="dropdown-menu nav-dropdown-menu" aria-labelledby="productDropdown">
                            <a class="dropdown-item" href="multifamily">Multi-Family Office</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="portfolio">Portfolio Management</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="liquidity">Liquidity Management</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="structured_products">Structured Products</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="mutual_funds">Mutual Funds</a>
                        </div>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0">
                        <a class="nav-link bold" href="account_opening">Open an account</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0">
                        <a class="nav-link bold" href="research">Research</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0 ">
                        <a class="nav-link bold" href="faq">FAQs</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0">
                        <a class="nav-link bold" href="contact_us">Contact Us</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="login">Login</a>
                    </li>

                    <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                        <a class="nav-link bold" href="javascript.void()" data-toggle="modal"
                            data-target=".bd-example-modal-lg"><img src="img/search.svg" alt="search" width="20"
                                class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <!--/.Navbar-->

    <section class="bg-slides">
        <div class="container-fluid no-padding">
            <div class="myslid1">

                <!--					slide 1-->
                <div class="height_normalize height_320px" style="background:linear-gradient(rgba(0, 0, 0, 0.58), rgba(9, 8, 8, 0.51)), rgba(0, 0, 0, 0.55) url(img/website_assets/HomePage/Sliders/Want-to-get.jpg);
                                                                      background-position: top center;
                                                                      background-size: cover;
                                                                      background-repeat: no-repeat;">

                    <div class="row justify-content-center pb-4 pt-5">
                        <div class="col-md-6 text-center">
                            <h3 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4">Want to get
                                started? </h3>
                            <p class="text-white text-center">
                                We create series of opportunities through unlimited investment plans.</p>

                            <a href="contact_us"
                                class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Get
                                Started</a>
                        </div>
                    </div>
                </div>


                <!--					slide 2-->
                <div class="height_normalize height_320px" style="background: linear-gradient(rgba(0, 0, 0, 0.58), rgba(9, 8, 8, 0.51)), rgba(0, 0, 0, 0.55) url(img/website_assets/HomePage/Sliders/wealth_management.jpg);
                                                                      background-position: center;
                                                                      background-size: cover;
                                                                      background-repeat: no-repeat;">
                    <div class="row justify-content-center pb-4 pt-5">
                        <div class="col-md-6 text-center">
                            <h3 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4">Wealth
                                Management</h3>
                            <p class="text-white text-center">We provide unending and well-organized wealth deals <br>to
                                serve your investment desires</p>

                            <a href="account_opening"
                                class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Get
                                Started</a>
                        </div>
                    </div>
                </div>

                <!--					slide 3-->
                <div class="height_normalize height_320px" style="background: linear-gradient(rgba(0, 0, 0, 0.58), rgba(9, 8, 8, 0.51)), rgba(0, 0, 0, 0.55) url(img/website_assets/HomePage/Sliders/Multifamily.jpg);
                                                                      background-position: center center;
                                                                      background-size: cover;
                                                                      background-repeat: no-repeat;">
                    <div class="row justify-content-center pb-4 pt-5">
                        <div class="col-md-6 text-center">
                            <h3 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4">Multi-Family
                                Office</h3>
                            <p class="text-white text-center">Family wealth and legacy are managed with dedication and
                                expertise.</p>

                            <a href="multifamily"
                                class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Get
                                Started</a>
                        </div>
                    </div>
                </div>

                <div class="height_normalize height_320px" style="background: linear-gradient(rgba(0, 0, 0, 0.58), rgba(9, 8, 8, 0.51)), rgba(0, 0, 0, 0.55) url(img/website_assets/HomePage/Sliders/Research_Slider.jpg);
                                                                      background-position: top center;
                                                                      background-size: cover;
                                                                      background-repeat: no-repeat;">
                    <div class="row justify-content-center pb-4 pt-5">
                        <div class="col-md-6 text-center">
                            <h3 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4">Stay Informed
                            </h3>
                            <p class="text-white text-center">Our Research Team tracks economic and market data for
                                performance of all major asset classes.</p>

                            <a href="#subscribe"
                                class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Subscribe</a>
                        </div>
                    </div>
                </div>

                <!--					slide 5-->
                <div class="height_normalize height_320px" style="background:linear-gradient(rgba(0, 0, 0, 0.58), rgba(9, 8, 8, 0.51)), rgba(0, 0, 0, 0.55) url(img/website_assets/HomePage/Sliders/Maximize-your.jpg);
                                                                      background-position: top center;
                                                                      background-size: cover;
                                                                      background-repeat: no-repeat;">
                    <div class="row justify-content-center pb-4 pt-5">
                        <div class="col-md-6 text-center">
                            <h3 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4">Maximize your
                                savings <br>with investments</h3>
                            <p class="text-white text-center">Our diversified schemes, help generate end-to-end
                                investment returns even for short-term savings plan</p>

                            <a href="account_opening"
                                class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-1-home d-none">
        <div class="container">
            <div class="row justify-content-center pb-4 pt-5">
                <div class="col-md-6">
                    <h3 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4">Stay Informed</h3>
                    <p class="text-white text-center">Our Research Team tracks economic and market data for performance
                        of all major asset classes.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-2-home">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="purple-card-section d-md-none d-lg-none">
                        <div class="row my-2">
                            <div class="col-md-3">
                                <p class="text-white text-center mb-0">Mutual Funds </p>
                                <p class="font-weight-bold text-center text-purple-light mb-1">Anchoria</p>
                                <p class="text-purple-light-2 text-center mb-0 small">4/9/2019</p>
                                <hr class="bg-default-purple my-2" />
                            </div>

                            <div class="col-md-3">
                                <div class="">
                                    <p class="text-white mb-0 text-center"><span
                                            class="font-weight-bold text-purple-light text-uppercase">AFIF</span></p>
                                    <p class="text-white mb-0 text-center"><span
                                            class="text-purple-light text-uppercase">BID / Offer</span></p>
                                    <p class="text-white mb-0 text-center">5.2 / 0.5</p>
                                </div>

                                <hr class="bg-default-purple my-2" />
                            </div>

                            <div class="col-md-3">
                                <div class="">
                                    <p class="text-white mb-0 text-center"><span
                                            class="font-weight-bold text-purple-light text-uppercase">AEF</span></p>
                                    <p class="text-white mb-0 text-center"><span
                                            class="text-purple-light text-uppercase">BID / Offer</span></p>
                                    <p class="text-white mb-0 text-center">0.9 / 1.5</p>
                                </div>
                                <hr class="bg-default-purple my-2" />
                            </div>

                            <div class="col-md-3">
                                <div class="">
                                    <p class="text-white mb-0 text-center"><span
                                            class="font-weight-bold text-purple-light text-uppercase">AMMF</span></p>
                                    <p class="text-white mb-0 text-center"><span
                                            class="text-purple-light text-uppercase">BID / Offer</span></p>
                                    <p class="text-white mb-0 text-center">5.2 / 0.9</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-md-5 pb-4">
                <div class="col-md-7">
                    {{-- <h3 class="text-dark gotham-bold font-weight-bold text-center font-35">Secure your future</h3>
                    <p class="text-center">We provide comprehensive financial planning advice and wealth management
                        services.
                        Our team is made up of experienced wealth advisors to help you make the right investment
                        decisions.</p> --}}
                        {!!$landing->hero!!}
                </div>
            </div>
        </div>
    </div>

    <!--        floating purple section-->
    <div class="purple-card-section-desktop px-1 py-2 side-option d-none d-md-block d-lg-block">
        <p class="text-white text-center mb-0">Mutual Funds <span
                class="font-weight-bold text-purple-light">Anchoria</span></p>
        <p class="text-purple-light-2 text-center mb-0 small">4/9/2019</p>
        <hr class="bg-default-purple my-2" />

        <div class="">
            <p class="text-white mb-0 text-center"><span
                    class="font-weight-bold text-purple-light text-uppercase">AFIF</span></p>
            <p class="text-white mb-0 text-center"><span class="text-purple-light text-uppercase">BID / Offer</span></p>
            <p class="text-white mb-0 text-center">5.2 / 0.5</p>
        </div>

        <hr class="bg-default-purple my-2" />


        <div class="">
            <p class="text-white mb-0 text-center"><span
                    class="font-weight-bold text-purple-light text-uppercase">AEF</span></p>
            <p class="text-white mb-0 text-center"><span class="text-purple-light text-uppercase">BID / Offer</span></p>
            <p class="text-white mb-0 text-center">0.9 / 1.5</p>
        </div>

        <hr class="bg-default-purple my-2" />


        <div class="">
            <p class="text-white mb-0 text-center"><span
                    class="font-weight-bold text-purple-light text-uppercase">AMMF</span></p>
            <p class="text-white mb-0 text-center"><span class="text-purple-light text-uppercase">BID / Offer</span></p>
            <p class="text-white mb-0 text-center">5.2 / 0.9</p>
        </div>

    </div>


    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <h3 class="purple-text-default gotham-bold font-weight-bold text-center font-35">Our Services</h3>
                <p class="text-center">{!!$landing->services!!}</p>

                
            </div>
        </div>

        <div class="row mt-4 text-justify">
            <div class="col-md-3 my-3">
                <div>
                    <div style="background-image: url(img/imageuo.jpg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 180px;
                                    width: 100%;">

                    </div>
                    <h5 class="mt-3 gotham-bold"><a class="text-dark" href="mutual_funds">Mutual Funds</a></h5>
                    <p class="">Starting from as low as N5000, You can have access to mutual funds that will help grow
                        your investments.</p>
                </div>
            </div>

            <div class="col-md-3 offset-md-1 my-3">
                <div>
                    <div style="background-image: url(img/277294_high_jpg_eci_rgb.jpg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 180px;
                                    width: 100%;">

                    </div>
                    <h5 class="mt-3 gotham-bold"><a class="text-dark" href="portfolio">Portfolio Management</a>
                    </h5>
                    <p class="">We manage funds by investing in a range of financial instruments ranging from
                        traditional asset classes to structured financial instruments in line with client’s investment
                        policy.</p>
                </div>
            </div>

            <div class="col-md-3 offset-md-1 my-3">
                <div>
                    <div style="background-image: url(img/cash-coins-money-259165.jpg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 180px;
                                    width: 100%;">

                    </div>
                    <h5 class="mt-3 gotham-bold"><a class="text-dark" href="liquidity">Liquidity Management</a>
                    </h5>
                    <p class="">This service allows us to provide financial services to small, medium-sized business, as
                        well as, large corporates and High Net-Worth individuals (HNIs), guiding them in ways to create
                        and sustain value with their cashflow management.</p>
                </div>
            </div>

        </div>

        <div class="row text-justify">
            <div class="col-md-3 my-3">
                <div>
                    <div style="background-image: url(img/post_4.jpg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 180px;
                                    width: 100%;">

                    </div>
                    <h5 class="mt-3 gotham-bold"><a class="text-dark" href="multifamily">Multi-Family Office</a>
                    </h5>
                    <p class="">Our multi-family office supports families with the management, organisation and
                        maintenance of their wealth.</p>
                </div>
            </div>

            <div class="col-md-3 offset-md-1 my-3">
                <div>
                    <div style="background-image: url(img/post_5.jpg);
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 180px;
                                    width: 100%;">

                    </div>
                    <h5 class="mt-3 gotham-bold"><a class="text-dark" href="structured_products">Structured
                            Products</a></h5>
                    <p class="">We offer bespoke services to our clients who wish to consolidate and grow their
                        investment portfolio in a structured manner.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="section-4-home" id="subscribe">
        <div class="container">

            <div class="row ">
                <div class="col-md-4 my-5">
                    <p class="font-weight-bold text-uppercase text-white">Join our Newsletter</p>
                    <p class="text-white font-weight-light">Subscribe to our mailing list to receive regular economic
                        and market data straight to your mail box.</p>
                </div>

                <div class="col-md-6 offset-md-1 my-md-5 mb-5">
                    <div class="input-group mt-4">
                        <input type="text" class="form-control bg-white border-right">

                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Subscribe</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="pt-2 font-small landing_footer">

        <!--Footer Links-->
        <div class="container text-center text-md-left">
            <div class="">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <p class="text-center text-md-left text-dark my-3 spacing-2 font-weight-bold"> Contact Us</p>

                        <ul class="list-unstyled">
                            <li class="text_primary"><a href="tel:+2348188899455"><img src="img/call.svg"
                                        class="img-fluid mr-1" width="12"> +234 818 889 9455</a></li>
                        </ul>

                        <ul class="list-unstyled">
                            <li class="text_primary"><a href="mailto:info@anchoriaam.com"><img src="img/mail.svg"
                                        class="img-fluid mr-1" width="12">info@anchoriaam.com</a></li>
                        </ul>

                        <ul class="list-unstyled mb-1">
                            <li class="text_primary"><img src="img/location.svg" class="img-fluid mr-1" width="12">5th
                                Floor, Elephant House,
                                214 Broad Street, Marina, Lagos.</li>
                        </ul>

                    </div>


                    <div class="offset-md-1 col-md-3 col-lg-3">
                        <p class="text-center text-md-left text-dark font-weight-bold my-3 spacing-2"> Quick Links</p>

                        <ul class="list-unstyled">
                            <li class="text_primary mb-2"><a href="who" class="">Who We Are</a></li>
                            <li class="text_primary mb-2"><a href="leadership" class="">Leadership</a></li>

                            <li class="text_primary mb-2"><a href="portfolio" class="">Portfolio Management</a>
                            </li>
                            <li class="text_primary mb-2"><a href="multifamily" class="">Multi-family Office</a>
                            </li>
                            <li class="text_primary mb-2"><a href="account_opening" class="">Open An Account</a>
                            </li>
                            <li class="text_primary mb-2"><a href="uploads/Anchoria%20Corporate%20Profile.pdf"
                                    class="">Corporate Information</a></li>
                            <li class="text_primary mb-2"><a href="mutual_funds" class="">Mutual Funds</a></li>

                        </ul>

                    </div>


                    <div class="offset-md-1 col-md-3 col-lg-3">
                        <p class="text-center text-md-left text-dark font-weight-bold my-3 spacing-2">Research</p>

                        <ul class="list-unstyled">
                            <li class="text_primary mb-2"><a href="#" class="">Economic Coverage</a></li>
                            <li class="text_primary mb-2"><a href="#" class="">Equity Coverage</a></li>

                            <li class="text_primary mb-2"><a href="#" class="">Fixed Income</a></li>
                            <li class="text_primary mb-2"><a href="#" class="">Past Reports</a></li>
                            <li class="text_primary mb-2"><a href="faq" class="">FAQs</a></li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>


        <div class="container text-center text-md-left">
            <div class="">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-6 col-lg-8">
                        <p class="small text-center text-dark grey-text my-3 spacing-2"> Anchoria Asset Management ©
                            2018 | IT Ops.</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--/.Footer-->


    <!-- Search modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="max-width: 95%;">
            <div class="modal-content">
                <form>
                    <div class="form-group mb-0" style="position: relative">
                        <input type="text" class="rounded-0 form-control" id="search" placeholder="search">
                        <img src="img/search_bar_icon.png" alt="search icon"
                            style="position: absolute; right: 10px; top: 10px;" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<script src='js/jquery.min.js'></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/utility.js"></script>

</html>