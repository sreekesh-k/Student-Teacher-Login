@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class='mt-5'>
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if (session()->has('Error'))
                <div class="alert alert-danger">{{ session('Error') }}</div>
            @endif
            @if (session()->has('Success'))
                <div class="alert alert-success">{{ session('Success') }}</div>
            @endif
        </div>
        <form action="{{ route('studentlogin.post') }}" method="POST" class="ms-auto me-auto" style="width:500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">name</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection