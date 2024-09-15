@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Current user parameters:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div>
                        name: {{ Auth::user()->name }}
                    </div>
                    <div>
                        email: {{ Auth::user()->email }}
                    </div>
                    <div>
                        id: {{ Auth::user()->id }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
