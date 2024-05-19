<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PCHL</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/ride/heading/tittle_icon.png') }}">
    <link rel="stylesheet" href="{{ asset('rides_frontend/assets/styles/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d0a01f8990.js" crossorigin="anonymous"></script>
    <style>
        .hamburger_background {
            background-color: white;
            border-radius: 4px;
        }

        @media (max-width: 767px) {
            .conatiner_position {
                position: fixed;
                top: 0px;
                z-index: 1000;
                background: #26252573;
            }
        }

        .header_text {
            background: #fff;
            padding: 6px 15px;
            border-radius: 2rem;
            margin-bottom: 1rem !important;
        }

        .solid_navbar {
            background: #fff;
        }

        .padding_solid_navbar {
            padding: 0px 15px;
            border-radius: 2rem;
        }

        .navbar_bg {
            height: 600px;
            background-size: cover;
            background-position: center;
            /* You can adjust this to top, bottom, left, right, etc. */
            width: 100%;
            background-repeat: no-repeat;
        }

        .navbar_bg::before {
            background: url('{{ asset('header_ride.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/ride/header/header_background_img.png') }}') center/cover no-repeat !important;
            z-index: -2;
            height: 41.5em;
        }

        .navbar_bg::before,
        .navbar_bg::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        @media (max-width: 767px) {
            .conatiner_position {
                position: fixed;
                top: 0px;
                z-index: 1000;
                background: #26252573;
            }
        }

        .header_text {
            background: #fff;
            padding: 6px 15px;
            border-radius: 2rem;
            margin-bottom: 1rem !important;
        }

        .solid_navbar {
            background: #fff;
        }

        .padding_solid_navbar {
            padding: 0px 15px;
            border-radius: 2rem;
        }

        .footer_logo {
            display: flex;
            justify-content: center
        }
    </style>
</head>

<body>
    <section>
        <div class="navbar_bg">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container conatiner_position">
                    <a class="navbar-brand" href="/"><img
                            src="{{ asset('frontend/ride_footer/header/logo_footer.png') }}" alt="" style="width: 4em"></a>
                    {{-- <button class="navbar-toggler hamburger_background" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <div class="">
                                <div class="d-lg-flex d-md-flex justify-content-end padding_solid_navbar solid_navbar">
                                    <li class="nav-item">
                                        <a class="nav-link nav_links {{ Request::is('/') ? 'nav_links_blue ' : '' }}"
                                            href="{{ route('landing') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav_links {{ Request::is('aboutus') ? 'nav_links_blue ' : '' }}"
                                            href="{{ route('aboutus') }}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav_links {{ Request::is('donation') ? 'nav_links_blue ' : '' }}"
                                            href="{{ route('donation') }}">Donations</a>
                                    </li>
                                    <li class="nav-item dropdown"> <!-- Dropdown menu -->
                                        <a class="nav-link nav_links dropdown-toggle {{ Request::is('programhighlights/cooking_classes') || Request::is('programhighlights/lifestyle_changes') || Request::is('programhighlights/treatments') ? 'nav_links_blue ' : '' }}"
                                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Programs
                                        </a>
                                        <div class="dropdown-menu solid_navbar" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item {{ request()->is('programhighlights/cooking_classes') ? 'active' : '' }}"
                                                href="{{ route('programhighlights', 'cooking_classes') }}">Cooking
                                                Classes</a>
                                            <a class="dropdown-item {{ request()->is('programhighlights/lifestyle_changes') ? 'active' : '' }}"
                                                href="{{ route('programhighlights', 'lifestyle_changes') }}">Lifestyle
                                                Changes</a>
                                            <a class="dropdown-item {{ request()->is('programhighlights/treatments') ? 'active' : '' }}"
                                                href="{{ route('programhighlights', 'treatments') }}">Treatments</a>
                                            <!-- Add more dropdown items as needed -->
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav_links" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </nav>
            <div class="container" style="position: sticky;top: 100%; ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="">
                            <div class="">
                                <div>

                                    <h6 class="head-2 page-header">
                                        {{ $data['header_heading'] ?? null }}
                                    </h6>

                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="row g-0 p-0">
            <div class="col-lg-6 col-md-12 col-12 d-flex align-items-center">
                <div class="container">
                    <div class="about">
                        <h6 class="head-2 about-header">About Swift Ride Pro</h6>
                        <p class="about-text">
                            {{ $data['about_ride_description']??null }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="banner-img">
                    <div class="">
                        <img src="{{ asset('frontend/ride/about/about_ride_background_img.png') }}" alt="banner-image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service pb-lg-5 pb-md-2 pb-0">
        <div class="container service-cont ps-lg-5 pe-lg-5">
            <div class="overlay-img">
                <img src="{{ asset('frontend/ride/about/about_ride_img_2.png') }}" alt="overlay">
            </div>
            <div class="row">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card service-card p-md-4 p-3 ml-5">
                            <img src="{{ asset('frontend/ride/ride_' . $i . '/ride_box_img_' . $i . '.png') }}"
                                alt="{{ $data['ride_heading_' . $i ] ??null}}" class="service-img">
                            <h6 class="mt-2 mt-sm-0 head-4 service-header pt-3 pb-2">
                                {{ $data['ride_heading_' . $i ]??null}}</h6>
                            <p class="service-text">{{ $data['ride_' . $i . '_description']??null }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container ps-lg-5 pe-lg-5 mt-lg-5 mt-md-4 mt-2">
            <div class="row pt-4">
                <div class="col-lg-4 col-md-4 text-sm-center">
                    <div class="mobile-interface-img">
                        <img src="{{ asset('frontend/ride/Service_1/service_img_1.png') }}" alt="mobile interface 1"
                            class="float-lg-end float-md-end">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-sm-center">
                    <div class="mobile-interface-img-2">
                        <img src="{{ asset('frontend/ride/Service_2/service_img_2.png') }}" alt="mobile interface 2"
                            class="float-lg-end float-md-end">
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 text-sm-center">
                    <div class="mobile-interface-img-3">
                        <img src="{{ asset('frontend/ride/Service_2/service_img_2.png') }}" alt="mobile interface 3"
                            class="float-lg-end float-md-end">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4 d-flex justify-content-md-center align-items-center">
                        <h6 class="number head-4">1</h6>
                        <h6 class="head-4 point">{{ $data['service_heading_' . $i]??null }}</h6>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container mt-3">
            <div class="row pe-lg-5 ps-lg-5 pt-3">
                <p class="point-text">{{ $data['service_description']??null }}</p>
            </div>
        </div>
    </section>

    <section class="packages">
        <div class="container">
            <div class="row pb-sm-0 mb-sm-0">
                <div class="packages-header text-center">
                    <h6 class="head-3 packages-header">Our Packages</h6>
                    <img src="./assets/images/Vector.png" alt="vector overlay" class="vector-img">
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-5 mt-2">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card package-card">
                            <img src="{{ asset('frontend/ride/package_' . $i . '/our_package_img_' . $i . '.png') }}"
                                alt="" class="package-img">
                            <h6 class="package-title head-4 packages-sub-header">
                                {{ $data['our_package_heading_' . $i . '']??null }}
                            </h6>
                            @php
                                $desc = explode("\n", $data['our_package_' . $i . '_description']??null);
                            @endphp
                            <ul>
                                @foreach ($desc as $d)
                                    <li><img src="./assets/images/Ellipse 6.png" alt=""
                                            class="me-4">{{ $d }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="driver-experenice pb-5">
        <div class="container driver-experience-cont ps-lg-5 pe-lg-5">
            <div class="driver-experience-overlay">
                <img src="{{ asset('frontend/ride/driver_experenice/driver_experenice.png') }}" alt="overlay">
            </div>
            <div class="row">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card service-card p-4 ml-5">
                            <img src="{{ asset('frontend/ride/driver_experenice_' . $i . '/driver_experenice_img_' . $i . '.png') }}"
                                alt="{{ $data['driver_experenice_' . $i . '']??null }}" class="service-img">
                            <h6 class="mt-2 head-4 service-header pt-3 pb-2">
                                {{ $data['driver_experenice_' . $i . '']??null }}
                            </h6>
                            <p class="service-text">{{ $data['driver_experenice_' . $i . '_description']??null }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container ps-lg-5 pe-lg-5 mt-lg-5 mt-md-5 mt-sm-2">
            <div class="row pt-lg-4 pt-md-4 pt-0">
                <div class="col-lg-4 col-md-4">
                    <div class="driver-interface-img-1">
                        <img src="{{ asset('frontend/ride/driver_experenice/driver_experenice_bottom_img1.png') }}"
                            alt="register" class="float-start">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="driver-interface-img">
                        <img src="{{ asset('frontend/ride/driver_experenice/driver_experenice_bottom_img2.png') }}"
                            alt="pickup-dropoff">
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4">
                    <div class="driver-interface-img-1">
                        <img src="{{ asset('frontend/ride/driver_experenice/driver_experenice_bottom_img3.png') }}"
                            alt="get-rated" class="float-end">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="page-header1 packages-header text-center">
                    <h3 class="head-2 easy-use">Easy to use</h3>
                    <img src="./assets/images/Vector2.png" alt="vector overlay" class="vector-img vector-img1">
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-5 mt-sm-0">
                @for ($i = 1; $i < 5; $i++)
                    <div class="col-lg-3 col-md-6 col-12 mt-md-3">
                        <div class="card driver-card">
                            <img src="{{ asset('frontend/ride/driver_information/driver_information_img_' . $i . '.png') }}"
                                alt="{{ $data['driver_information_' . $i ]??null }}">
                            <h4 class="mt-2 head-5 driver-exp-header pt-3 pb-2">
                                {{ $data['driver_information_' . $i . '']??null }}
                            </h4>
                            <p class="driver-exp-text">{{ $data['driver_information_' . $i . '_description'] ??null}}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container mt-lg-5 mt-md-5 mt-sm-auto">
            <div class="row pe-lg-5 ps-lg-5 pe-md-5 ps-md-5  pt-5">
                <p class="point-text">{{ $data['driver_information_bottom_description']??null }}</p>
            </div>
        </div>
    </section>

    <section class="float-packages">
        <div class="container">
            <h6 class="text-center head-1 main-heading">Float Packages</h6>
            <div class="row mt-lg-5 mt-md-5 mt-sm-1">
                <div class="col-lg-4 col-md-4">
                    <div class="card float-card text-center">
                        <h6 class="float-package-title head-4" style="color: #034f75">{{ $data['plan_name_1']??null }}</h6>
                        <h6 class="head" style="color: #034f75">{{ $data['pricing_1']??null }}</h6>
                        <h6 style="color: #81A7BA;">{{ $data['pricing_description_1']??null }}</h6>
                        <ul class="text-start">
                            <li style="color: #034f75;"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">{{ $data['features_1_1']??null }}
                            </li>
                            <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">{{ $data['features_1_2']??null }}</li>
                        </ul>
                        <div class="float-logo m-auto">
                            <img src="{{ asset('frontend/ride/pricing_plan_1/pricing_plan1.png') }}" alt="logo-back"
                                class="float-logo">
                        </div>
                        <h6 class="mb-5 head-3 swift">{{ $data['plan_information_1']??null }}</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="card float-card-advance text-center text-white">
                        <h6 class="float-package-title-advance head-4">{{ $data['plan_name_2']??null }}</h6>
                        <h6 class="head">{{ $data['pricing_2']??null }}</h6>
                        <h6 style="color: #81A7BA;">{{ $data['pricing_description_2']??null }}</h6>
                        <ul class="text-start">
                            <li><img src="./assets/images/tick.png" alt=""
                                    class="me-4">{{ $data['features_2_1']??null }}</li>
                            <li><img src="./assets/images/tick.png" alt=""
                                    class="me-4">{{ $data['features_2_2']??null }}
                            </li>
                        </ul>
                        <div class="float-logo m-auto">
                            <img src="{{ asset('frontend/ride/pricing_plan_2/pricing_plan2.png') }}"
                                alt="logo-white">
                        </div>
                        <h6 class="mb-5 head-3 swift">{{ $data['plan_information_2']??null }}</h6>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 text-center">
                    <div class="card float-card text-center">
                        <h6 class="float-package-title head-4" style="color: #034f75">{{ $data['plan_name_3']??null }}</h6>
                        <h6 class="head" style="color: #034f75">{{ $data['pricing_3']??null }}</h6>
                        <h6 style="color: #81A7BA;">{{ $data['pricing_description_3']??null }}</h6>
                        <ul class="text-start">
                            <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">{{ $data['features_3_1']??null }}
                            </li>
                            <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">{{ $data['features_3_1']??null }}</li>
                        </ul>
                        <div class="float-logo m-auto">
                            <img src="{{ asset('frontend/ride/pricing_plan_3/pricing_plan3.png') }}" alt="logo-back">
                        </div>
                        <h6 class="mb-5 head-3 swift">{{ $data['plan_information_3']??null }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row mb-3">
                <div class="testimonies-text text-center">
                    <h6 class="head-1 main-heading">Testimonies</h6>
                </div>
            </div>
            <div class="row pt-5 pb-lg-5">
                <div class="col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <h6 class="waht_people_say">{{ $data['testimonies_heading']??null }}</h6>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="comment">
                        <div class="rating d-flex align-items-end">
                            <img src="./assets/images/“.png" class="pe-2" alt="">
                            <i class="fa-solid fa-star pe-2"></i>
                            <i class="fa-solid fa-star pe-2"></i>
                            <i class="fa-solid fa-star pe-2"></i>
                            <i class="fa-solid fa-star pe-2"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="ps-lg-5 testimonial_review pt-4 pb-2">{{ $data['our_client_description']??null }}</p>
                    </div>
                    <div class="row ps-lg-5">
                        <div class="col-lg-2 col-md-2">
                            <img src="{{ asset('frontend/ride/our_client/our_client_img.png') }}" alt=""
                                class="user-pic mb-lg-0 mb-md-3 mb-3">
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <h6 class="user_name_testimonial">{{ $data['our_client_name']??null }}</h6>
                            <p class="testimonial_review_designation">{{ $data['our_client_role']??null }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured mt-5">
        <h6 class="text-center pt-lg-5 pt-md-5 pt-sm-3 mb-lg-5 mb-md-5 mb-sm-2 head-1 main-heading featured-by-title">
            Featured By</h6>
        <div class="featured-by">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="width_footer">
                        <div class="d-flex justify-content-between">
                            @for ($i = 1; $i < 4; $i++)
                                <div class="">
                                    <img src="{{ asset('frontend/ride/featured/featured_img_' . $i . '.png') }}"
                                        alt="" class="azsic-logo">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $social_media_logos = ['youtube', 'facebook', 'whatapp'];
    @endphp
    <footor>
        <div class="footor-link" style="background-color:#779EC3">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg-6 col-md-6">
                        <div class="pchl-text">
                            <h6 class="head-3"> <span class="hyper-img"><img
                                        src="{{ asset('frontend/ride_footer/header/logo_footer.png') }}"
                                        alt="" style="width: 4em"></span>
                            </h6>
                        </div>
                        <p>{{ $data['footer_description'] ?? null }}</p>
                        <div class="social-icons pb-lg-0 pb-md-0 pb-3">
                            @foreach ($social_media_logos as $key => $social_media_logo)
                                <?php $indexedKey = $key + 1; ?>
                                <a href="{{ $data['social_link_' . $indexedKey . ''] ?? null }}"
                                    style="text-decoration: none">
                                    <img src="./assets/images/{{ $social_media_logo }}.png" class="me-4"
                                        alt="">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">

                        <h3 class="pchl_info pt-4">Swift Ride Pro</h3>
                        @for ($i = 1; $i < 4; $i++)
                            <a href="{{ $data['about_link_' . $i . ''] ?? null }}"
                                style="text-decoration: none !important">
                                <p class="pchl_info_p pt-lg-3 pt-md-3 pt-3 mb-2 text-white">
                                    {{ $data['about_name_' . $i] ?? null }}
                                </p>
                            </a>
                        @endfor
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="text-lg-end text-md-end text-sm-center">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <h6 class="head-5 text-lg-end text-md-end text-sm-center">Contact Info</h6>
                                    </li>
                                    @for ($i = 1; $i < 4; $i++)
                                        <li><a hre#f="#"> {{ $data['contact_info_' . $i] ?? null }}</a></li>
                                    @endfor

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="text-white">
            </div>
            <div class="container">
                <div class=" border_bottom_white mt-3">
                    <div class="footer_copy_right">
                        <div class="footer_logo">
                            <a class="me-5" style="text-decoration: none" href="mailto:industriestemb@gmail.com">
                                <img width="70px" src="{{ asset('assets/images/PPI_Logo.png') }}" alt="logo">
                            </a>
                            <a href="mailto:industriestemb@gmail.com">
                                <img width="70px" src="{{ asset('frontend/ride_footer/bottom_imgs/bottom_img_2.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                        &nbsp;
                    </div>
                    <div class="row text-center text-white">
                        <p class="pt-3">Powered by PivotPoint - Swift Ride Pro</p>
                    </div>
                </div>
            </div>
        </div>
    </footor>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
