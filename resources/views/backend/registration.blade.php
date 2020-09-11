@extends('master')

@section('content')
    <h2>Register an account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('message'))
            <div class="alert alert-{{ session('type')  }}">
                {{ session('message') }}
            </div>
        @endif

        <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input name="name" type="text" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="text" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
