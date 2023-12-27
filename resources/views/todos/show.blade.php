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
                    <b>Your Todo Title is:</b> {{ $todo->title}} <br>
                    <b>Your Todo description is:</b> {{ $todo->description}} <br> <br>
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
