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
                        Discount
                    </p>
                    <h2 class="primary-header ">
                        Discount Lists
                    </h2>
                </div>
            </div>
            <div class="row my-2">
                @include('components.alert')
                <div class="d-flex col-md-12 flex-row-reverse my-4">
                    <a href="{{route('admin.discount.create')}}" class="btn btn-sm btn-primary">Add Discount</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-secondary">
                            <tr>
                                <th class="text-center"> No </th>
                                <th> Name </th>
                                <th> Code </th>
                                <th> Description </th>
                                <th> Percentage </th>
                                <th colspan="2" class="text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @forelse ($discounts as $no => $discount)
                                <tr>
                                    <td class="text-center"> {{ ++$no }} </td>
                                    <td> {{$discount->name}} </td>
                                    <td> {{$discount->code}} </td>
                                    <td> {{$discount->description}} </td>
                                    <td> {{$discount->percentage}}% </td>
                                    <td width="13%" class="text-end">
                                        <a href="{{route('admin.discount.edit', $discount->id)}}" class="btn btn-sm btn-thirdty">Edit</a>
                                    </td>
                                    <td class="" width="13%">
                                        <form action="{{route('admin.discount.destroy', $discount->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
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
                {{--  <table class="table table-bordered">
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
                </table>  --}}
            </div>
        </div>
    </section>
@endsection