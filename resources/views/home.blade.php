@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @role('admin')
                            <p>This is visable to users with the admin role. Gets translated to
                                \Laratrust::hasRole('admin')</p>
                        @endrole

                        @role('customer')
                            <p>This is visable to users with the admin role. Gets translated to
                                \Laratrust::hasRole('customer')</p>
                        @endrole
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
