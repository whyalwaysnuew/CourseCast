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
                @include('components.alert')
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
                                    <strong>
                                        Rp. {{$checkout->total}}
                                        @if ($checkout->discount_id)
                                            <span class="badge bg-success">
                                                Discount {{$checkout->discount_percentage}}%
                                            </span>
                                        @endif
                                    </strong>
                                </td>
                                <td>
                                    @if ($checkout->payment_status == "waiting")
                                        <strong class="text-primary">{{$checkout->payment_status}}</strong>
                                    @elseif($checkout->payment_status == "paid")
                                        <strong class="text-success">{{$checkout->payment_status}}</strong>
                                    @endif
                                </td>
                                <td>
                                    @if ($checkout->payment_status == 'waiting')
                                        <a href="{{$checkout->midtrans_url}}" target="_blank" class="btn btn-primary btn-sm">
                                            Pay Now
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="https://wa.me/628xxx?text= Halo, saya ingin bertanya tentang kelas {{$checkout->Camp->title}}" target="_blank" class="btn btn-primary btn-sm">
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