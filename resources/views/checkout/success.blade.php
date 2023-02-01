@extends('layouts.app')

@section('title')
    CourseCast - Checkout Success
@endsection

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('assets/ill_register.png')}}" height="250" class="mb-4" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        WHAT A DAY!
                    </p>
                    <h2 class="primary-header ">
                        Berhasil Checkout
                    </h2>
                    <a href="{{route('dashboard')}}" class="btn btn-primary mt-2">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection