@extends('layouts.app2')

@section('child')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<div class="container-fluid min-vh-100 bg-dark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest
                @else


                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
