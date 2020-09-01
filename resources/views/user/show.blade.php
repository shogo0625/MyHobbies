@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ $user->name }}</div>

                <div class="card-body">
                    <b>My Motto:<br>{{ $user->motto }}</b>
                    <p class="mt-2"><b>About Me:</b><br>{{ $user->about_me }}</p>
                </div>
            </div>

            <div class="mt-2">
                <a href="{{ URL::previous() }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-circle-up"></i> Back to Overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
