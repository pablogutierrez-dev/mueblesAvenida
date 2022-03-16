@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Inicia Sesion</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection