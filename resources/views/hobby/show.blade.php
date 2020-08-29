@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Hobby Detail</div>

                <div class="card-body">
                    <b>{{ $hobby->name }}</b>
                    <p>{{ $hobby->description }}</p>
                </div>
            </div>

            <div class="mt-2">
                <a href="/hobby" class="btn btn-primary btn-sm"><i class="fas fa-arrow-circle-up"></i> Back to Overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
