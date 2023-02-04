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
                        Checkouts
                    </p>
                    <h2 class="primary-header ">
                        Checkout Lists
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr class="align-middle">
                            <th>Camp</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Register Date</th>
                            <th>Paid Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td>
                                    <strong>
                                        {{$checkout->Camp->title}}
                                    </strong>
                                </td>
                                <td>
                                    {{$checkout->User->name}}
                                </td>
                                <td>
                                    <strong><span class="text-success">Rp. {{$checkout->Camp->price}}.000</span></strong>
                                </td>
                                <td>
                                    {{$checkout->created_at->format('d M Y')}}
                                </td>
                                <td class="text-center">
                                    @if ($checkout->payment_status == 'paid')
                                        <div class="badge bg-success">{{$checkout->payment_status}}</div>
                                    @elseif ($checkout->payment_status == 'waiting')
                                        <div class="badge bg-warning">{{$checkout->payment_status}}</div>
                                    @else
                                        <div class="badge bg-danger">{{$checkout->payment_status}}</div>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-light">
                                <td colspan="7" class="text-center">
                                    <h6 class="text-secondary">
                                        No Data!
                                    </h5>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection