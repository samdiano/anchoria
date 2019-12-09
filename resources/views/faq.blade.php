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
		.card {
			box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1) !important;
			border: 2px solid #E0E0E0 !important;
			border-radius: 8px !important;
		}

		.accordion .card .card-header {
			padding: 1rem 1.5rem;
			background: 0 0;
			border-bottom: 0;
		}

		.accordion .card h5 {
			font-size: 1.1rem;
			font-weight: 400;
		}

		.accordion .card .card-header a:not(.collapsed) .rotate-icon {
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			transform: rotate(180deg);
		}

		.accordion .card .fa-angle-down {
			float: right;
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

					<li class="nav-item px-md-2 my-2 my-md-0">
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

					<li class="nav-item px-md-2 my-2 my-md-0 active-now">
						<a class="nav-link bold" href="{{url('faq')}}">FAQs</a>
					</li>

					<li class="nav-item px-md-2 my-2 my-md-0">
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

	<div class="section-1-faq">
		<div class="container">
			<div class="row justify-content-center pb-4 pt-5">
				<div class="col-md-7">
					<h2 class="text-white gotham-bold font-weight-bld text-center mt-5 pt-5 mb-4 font-40">Frequently
						Asked Questions </h2>

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
		<div class="row justify-content-center">
			<div class="col-md-10">

				<div class="accordion md-accordion mt-md-5 mt-3" id="accordionExfaq" role="tablist"
					aria-multiselectable="true">
					@foreach ($faqs as $faq)
					<div class="card my-3 border-0">
						<div class="card-header rounded" role="tab" id="faqheading1">
							<a data-toggle="collapse" data-parent="#accordionExfaq" href="#faq{{$faq->id}}" aria-expanded="true"
								aria-controls="faq1">
								<h5 class="mb-0 text_secondary">
									<span class="gotham-bold">{{$faq->question}}
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>

							</a>
						</div>

						<div id="faq{{$faq->id}}" class="collapse show mb-2" role="tabpanel" aria-labelledby="faqheading1"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								{{$faq->response}}
							</div>
						</div>
					</div>
					@endforeach


					{{-- <div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading2">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq2"
								aria-expanded="false" aria-controls="faq2">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold"> What is your minimum
										Investment Value?</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq2" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading2"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								The minimum investment value differs for each investment. For each product you are
								interested in, you will be told the minimum investment amount for that product.
							</div>
						</div>
					</div>


					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading3">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq3"
								aria-expanded="false" aria-controls="faq3">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">With what types of clients do
										you work?</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq3" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading3"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								<p>We work with individuals, families, and institutions who seek professional wealth
									management and financial planning services. Our clients range from ordinary
									individuals and families to those with specific wealth management needs.</p>

								<p>For example;</p>
								<ol>
									<li>If a family is considering the sales of a business, we can help with the pre-and
										post-sale wealth management planning and portfolio management. </li>

									<li>
										Busy entrepreneurs and professionals who understand the benefits of having a
										financial plan and enlisting skilled professionals to manage their investment
										portfolios are another example of clients we help. </li>

									<li>
										Surviving spouses who need help managing proceeds from estates are also among
										the types of clients we serve.
									</li>

									<li> Finally, we can manage trusts created through estates and charitable
										foundations.
									</li>
								</ol>


							</div>
						</div>

					</div>

					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading4">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq4"
								aria-expanded="false" aria-controls="faq4">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold"> Do you have a minimum
										account size?</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq4" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading4"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								No. We do not have a minimum account size. Some clients may prefer to hire us on an
								hourly basis or for comprehensive financial planning services instead of hiring us for
								wealth management services.
							</div>
						</div>

					</div>

					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading5">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq5"
								aria-expanded="false" aria-controls="faq5">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">Will you customize a
										financial plan and portfolio exclusively for me?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq5" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading5"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								<p>Yes. Most client portfolios are a product of our very personal, financial planning
									process. We create a mix of various asset class instruments for your portfolio, and
									we rebalance your portfolio to make sure the allocations stay in balance with your
									financial plan. As your life situation changes, we revise your financial plan and
									may recommend adjustments to your portfolio so that your investments are
									appropriately allocated.</p>
							</div>
						</div>

					</div>

					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading6">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq6"
								aria-expanded="false" aria-controls="faq6">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">What types of investment
										vehicles do you normally use?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq6" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading6"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								We believe all our clients can benefit from low-cost and high yielding investments which
								is why we diversify investments in high yielding investment vehicles like treasury
								bills, commercial papers, stocks, fixed income etc.
							</div>
						</div>

					</div>

					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading7">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq7"
								aria-expanded="false" aria-controls="faq7">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">How will you keep me involved
										in decisions affecting my portfolio and investment goals?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq7" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading7"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								<p>Our management system features consistent interaction with each client. As events
									transpire, we keep you fully apprised of the performance of your investment
									portfolio via SMS, phone calls, emails or physical meetings if necessary. We ensure
									to always update your personal financial plan and make sure your plan is consistent
									with your financial objectives and risk profile.</p>

								<p>You will receive quarterly reports detailing your portfolio holdings, asset
									allocation, and performance summary. We are available for discussions with your tax
									adviser. Quarterly statements are provided by the custodian of your account, along
									with transaction confirmations on purchases and sales. Of course, information on
									your investment is available 24/7 on your Client Portal.</p>
							</div>
						</div>

					</div>

					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading8">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq8"
								aria-expanded="false" aria-controls="faq8">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">How will I have access to the
										money I’ll need from my account?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq8" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading8"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								If you need stable monthly income, we can set up periodic distributions into your
								registered account, or funds wired as needs arise.
							</div>
						</div>

					</div>


					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading9">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq9"
								aria-expanded="false" aria-controls="faq9">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">How are you compensated for
										your services?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq9" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading9"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								Our services come with a management fee which will be disclosed.
							</div>
						</div>

					</div>


					<div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading10">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq10"
								aria-expanded="false" aria-controls="faq10">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">How do I open an Asset
										Management account and how long does it take?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>

						<div id="faq10" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading10"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								<p>To open an account, <a href="account_opening.html">click here</a> to download all
									necessary documents. After you have filled application form, you can send the
									documents including a proof of identity and a proof of address to Anchoria Asset
									Management to <a href="mailto:info@anchoriaam.com">info@anchoriaam.com</a>.</p>
								<br />
								<p>After we receive your application form, we will determine your investment and risk
									profile. In case there are no further questions, you will receive your account
									details within five (5) business days.</p>

							</div>
						</div>

					</div> --}}


					{{-- <div class="card my-3 border-0">

						<div class="card-header rounded" role="tab" id="faqheading11">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionExfaq" href="#faq11"
								aria-expanded="false" aria-controls="faq11">
								<h5 class="mb-0 text_secondary"> <span class="gotham-bold">What are your Opening hours?
									</span> <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>


						<div id="faq11" class="collapse mb-2" role="tabpanel" aria-labelledby="faqheading11"
							data-parent="#accordionExfaq">
							<div class="card-body pt-0">
								<hr class="my-2">
								We are open 8 a.m. to 5.00pm from Monday to Friday
							</div>
						</div>

					</div> --}}

				</div>

			</div>
		</div>
	</div>

	<div class="section-4-home">
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