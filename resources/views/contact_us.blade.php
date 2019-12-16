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


    <style>
        .input-group {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            /*                        display: inline-flex  ;*/
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }

        .input-group input {
            margin-top: 0px;
        }

        .input-group-append {
            margin-left: -1px;
        }

        .input-group-append,
        .input-group-prepend {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #EB0028;
            border: 1px solid #EB0028;
            border-radius: .25rem;
        }

        .border-right {
            border-top-right-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top-nav mb-md-5 py-2">
        <div class="container-fluid">
            <!-- Navbar brand -->

            <a class="navbar-brand" href="index.html">
                <img src="img/subs-white-Anchoria.png" width="160" class="img-fluid d-none d-md-block d-lg-block"
                    id="main_logo" alt="VFD Group Logo">
                <img src="img/aamblacklogo.png" width="160" class="img-fluid d-lg-none" id="main_logo"
                    alt="VFD Group Logo">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item px-md-2 my-2 my-md-0 ">
                        <a class="nav-link bold" href="{{url('/')}}">Home</a>
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
                            <a class="dropdown-item" href="{{url('multifamily')}}">Multi-Family Office</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('portfolio')}}">Portfolio Management</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('liquidity')}}">Liquidity Management</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('structured_products')}}">Structured Products</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('mutual_funds')}}">Mutual Funds</a>
                        </div>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('account_opening')}}">Open an account</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('research')}}">Research</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0 ">
                        <a class="nav-link bold" href="{{url('faq')}}">FAQs</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0 active-now">
                        <a class="nav-link bold" href="{{url('contact_us')}}">Contact Us</a>
                    </li>

                    <li class="nav-item px-md-2 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="{{url('login')}}">Login</a>
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

    <div class="section-1-contact">
        <div class="container">
            <div class="row justify-content-center pb-4 pt-5">
                <div class="col-md-6">
                    <h2 class="text-white gotham-bold text-center mt-5 pt-5 mb-4 font-40">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="section-2-home">
        <div class="container position-relative">


            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="white-card-section">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-dark px-5 pt-4 mb-0">Contact Form</h2>
                                <hr />
                            </div>
                        </div>
                        @include('partial.alert')

                        <div class="row">

                            <div class="col-md-6">
                                <form class="px-5 pb-5" method="post" action="{{url('contact_us')}}">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class="active">Name</label>
                                        <input type="text" class="form-control border rounded" id="name" name="name" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control border rounded" id="email" name="email"
                                            placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control border rounded" id="phone" name="phone"
                                            placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control text-area" id="message" rows="3" name="message"
                                            style=""></textarea>
                                    </div>

                                    <button
                                        class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Send</button>

                                </form>

                            </div>

                            <div class="offset-md-1 col-md-5">
                                <div class="px-5">
                                    <p class="text_secondary mt-5 mt-md-0">You can visit our Office</p>
                                    <ul class="list-unstyled mb-1">
                                        <li class="text_primary"><img src="img/location.svg" class="img-fluid mr-1"
                                                width="12">{!!$contact->address!!}</li>

                                    <ul class="list-unstyled">
                                        <li class="text_primary mb-3"><a href="tel:+2348188899455"><img
                                                    src="img/call.svg" class="img-fluid mr-1" width="12">{{$contact->phone}}</a></li>

                                        <li class="text_primary"><a href="tel:+234 9087284135"><img src="img/call.svg"
                                                    class="img-fluid mr-1" width="12">{{$contact->phone_2}}</a></li>
                                    </ul>

                                    <ul class="list-unstyled">
                                        <li class="text_primary mb-3"><a href="mailto:{{$contact->email}}"><img
                                                    src="img/mail.svg" class="img-fluid mr-1"
                                                    width="12">{{$contact->email}}</a></li>


                                        <li class="text_primary mb-3"><a href="mailto:{{$contact->email_2}}"><img
                                                    src="img/mail.svg" class="img-fluid mr-1"
                                                    width="12">{{$contact->email_2}}</a></li>


                                        <li class="text_primary mb-3"><a
                                                href="mailto:{{$contact->email_3}}"><img src="img/mail.svg"
                                                    class="img-fluid mr-1"
                                                    width="12">{{$contact->email_3}}</a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="contact-banner">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-4 my-5 text-center">
                    <p class="text-uppercase text-white text-center font-18">Let’s put your money to work. Start
                        investing today.</p>
                    <a href="account_opening.html"
                        class="btn vfd-btn-red py-2 px-5 weight-semi-bold rounded mx-md-0 waves-effect waves-light">Get
                        Started</a>
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
                            <li class="text_primary mb-2"><a href="who.html" class="">Who We Are</a></li>
                            <li class="text_primary mb-2"><a href="leadership.html" class="">Leadership</a></li>

                            <li class="text_primary mb-2"><a href="portfolio.html" class="">Portfolio Management</a>
                            </li>
                            <li class="text_primary mb-2"><a href="multifamily.html" class="">Multi-family Office</a>
                            </li>
                            <li class="text_primary mb-2"><a href="account_opening.html" class="">Open An Account</a>
                            </li>
                            <li class="text_primary mb-2"><a href="uploads/Anchoria%20Corporate%20Profile.pdf"
                                    class="">Corporate Information</a></li>
                            <li class="text_primary mb-2"><a href="mutual_funds.html" class="">Mutual Funds</a></li>
                        </ul>

                    </div>


                    <div class="offset-md-1 col-md-3 col-lg-3">
                        <p class="text-center text-md-left text-dark font-weight-bold my-3 spacing-2">Research</p>

                        <ul class="list-unstyled">
                            <li class="text_primary mb-2"><a href="#" class="">Economic Coverage</a></li>
                            <li class="text_primary mb-2"><a href="#" class="">Equity Coverage</a></li>

                            <li class="text_primary mb-2"><a href="#" class="">Fixed Income</a></li>
                            <li class="text_primary mb-2"><a href="#" class="">Past Reports</a></li>
                            <li class="text_primary mb-2"><a href="faq.html" class="">FAQs</a></li>

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