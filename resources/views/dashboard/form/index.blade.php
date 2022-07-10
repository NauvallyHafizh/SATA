@extends('dashboard.layouts.main')

@section('container')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Register Your Fertilizers!</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><i data-feather="chevron-right" height="12" weight="12"></i></li>
                                    <li aria-current="page">Register Fertilizer</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <form method="post" action="/form" class="form-horizontal mt-4" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ auth()->user()->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="fertilizer_name">Seed Name</label>
                                    <input type="text" class="form-control @error('fertilizer_name') is-invalid @enderror" id="fertilizer_name" name="fertilizer_name" required value="{{ old('fertilizer_name') }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-select" name="category_id" id="category_id">
                                        @foreach($categories as $category)
                                            @if(old('category_id') == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity (kg)</label>
                                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" required value="{{ old('quantity') }}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price / 50kg</label>
                                    <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" required value="{{ old('price') }}">
                                </div>
                                <div class="form-group">
                                    <label for="month">Select month: </label>
                                    <select class="form-select" name="month_id" id="month_id">
                                        @foreach($months as $month)
                                            @if(old('month_id') == $month->id)
                                                <option value="{{ $month->id }}" selected>{{ $month->name }}</option>
                                            @else
                                                <option value="{{ $month->id }}">{{ $month->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection