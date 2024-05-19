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
</style>
<div class="container conatiner_position">
    <a class="navbar-brand" href="/"><img src="{{ asset('frontend/header/header/logo_header.png') }}"
            alt="" style="width: 4em"></a>
    <button class="navbar-toggler hamburger_background" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @php
        $data = [];
        $contents = \App\Content::where('page', 'header')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
    @endphp

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <div class="">

                <div class="d-flex justify-content-around justify-content-lg-end justify-content-md-end">
                    <p class="nav-link nav_links mb-0 mt-3 header_text">{{ $data['header_text'] ?? null }}</p>
                </div>
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
                                href="{{ route('programhighlights', 'cooking_classes') }}">Cooking Classes</a>
                            <a class="dropdown-item {{ request()->is('programhighlights/lifestyle_changes') ? 'active' : '' }}"
                                href="{{ route('programhighlights', 'lifestyle_changes') }}">Lifestyle Changes</a>
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
    </div>
</div>
