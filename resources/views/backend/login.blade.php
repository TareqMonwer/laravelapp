@extends('master')

@section('content')
    <h2>Login to your account</h2>
    <form method="POST" action="{{ route('login') }}">
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
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
