@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Courses
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{asset('assets/item_bootcamp.png')}}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{$checkout->Camp->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('d M, Y')}}
                                    </p>
                                </td>
                                <td>
                                    <strong>${{$checkout->Camp->price}},00</strong>
                                </td>
                                <td>
                                    @if ($checkout->is_paid)
                                        <strong class="text-success">Success</strong>
                                    @else
                                        <strong class="text-primary">Waiting for Payment</strong>
                                    @endif
                                </td>
                                <td>
                                    <a href="https://wa.me/628xxx?text= Halo, saya ingin bertanya tentang kelas {{$checkout->Camp->title}}" target="_blank" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr class="align-middle">
                                <div class="alert alert-info" role="alert">
                                    Belum Memiliki Kelas!
                                </div>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection