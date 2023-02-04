@extends('layouts.app')

@section('title')
    Create Discount
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
                        Create Discount
                    </h2>
                </div>
            </div>
            <div class="my-4">
                @include('components.alert')
                <div class="card border-primary">
                    <div class="card-header p-4 fw-bold">
                            Details
                    </div>
                    <div class="card-body p-4">
                        <form action="{{route('admin.discount.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Name</label>
                                <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" id="name" value="{{old('name') ?: ''}}" required>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Code</label>
                                <input type="text" name="code" class="form-control {{$errors->has('code') ? 'is-invalid' : '' }}" id="code" value="{{old('code') ?: ''}}" required>
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{$errors->first('code')}}</p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3">{{old('code')}}</textarea>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label fw-semibold">Percentage</label>
                                <div class="input-group {{$errors->has('percentage') ? 'is-invalid' : '' }}">
                                    <input type="number" name="percentage" class="form-control" id="percentage" min="1" max="200" value="{{old('percentage') ?: ''}}" required>
                                    <span class="input-group-text">%</span>
                                </div>
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{$errors->first('percentage')}}</p>
                                @endif
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection