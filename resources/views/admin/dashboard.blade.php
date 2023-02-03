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
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr class="align-middle">
                            <th>Camp</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Register Date</th>
                            <th>Paid Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td>
                                    {{$checkout->Camp->title}}
                                </td>
                                <td>
                                    {{$checkout->User->name}}
                                </td>
                                <td>
                                    <strong><span class="text-danger">$</span>{{$checkout->Camp->price}},00</strong>
                                </td>
                                <td>
                                    {{$checkout->created_at->format('d M Y')}}
                                </td>
                                <td class="text-center">
                                    @if ($checkout->is_paid)
                                        <div class="badge bg-success">Success</div>
                                    @else
                                        <div class="badge bg-warning">Waiting</div>
                                    @endif
                                </td>
                                <td>
                                    @if (!$checkout->is_paid)
                                        <form action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                            @csrf
                                            <button class="btn btn-primary btn-sm">Set to Paid</button>
                                        </form>
                                    @else
                                        
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="align-middle">
                                <div class="alert alert-info" role="alert">
                                    No Data!
                                </div>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection