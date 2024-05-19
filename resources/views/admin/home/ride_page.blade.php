@extends('admin.layouts.app')
@section('css_after')
    <style>
        .border_right {
            border-right: 2px solid #dee2e6;
        }
    </style>
@endsection
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Top Header</h5>
                            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="page" value="{{ $page = 'ride' }}">
                                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'heading' }}">
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-12">Tittle Icon</label>
                                    <div class="col-12">
                                        <input class="form-control" name="img[tittle_icon]"
                                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <img width="150px"
                                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/tittle_icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-12">Logo</label>
                                    <div class="col-12">
                                        <input class="form-control" name="img[logo_header]"
                                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <img width="150px"
                                            src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/logo_header.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-12">Header Text</label>
                                    <div class="col-12">
                                        <input type="text" name="type[header_text]" class="form-control"
                                            value="{{ $data['header_text'] ?? null }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>


                @include('admin.home.parts.ride.header')
                @include('admin.home.parts.ride.about_ride')
                @include('admin.home.parts.ride.rides')
                @include('admin.home.parts.ride.our_package')
                @include('admin.home.parts.ride.driver_experenice')
                @include('admin.home.parts.ride.driver_information')
                @include('admin.home.parts.ride.ride_plans')
                @include('admin.home.parts.ride.testimonies')
                @include('admin.home.parts.ride.featured')

                <div class="row">
                    <h2>Footer </h2>
                    @include('admin.home.parts.ride_footer.header')
                    @include('admin.home.parts.ride_footer.about')
                    @include('admin.home.parts.ride_footer.contact_info')
                    @include('admin.home.parts.ride_footer.bottom_img')
                </div>
            </div>
        </section>
    </main>
@endsection
