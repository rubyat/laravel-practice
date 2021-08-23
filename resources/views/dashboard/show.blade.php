@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $story->title }} by <i>{{ $story->user->name }}</i>
                    <a href="{{ route('dashboard.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    
                    <p>{{ $story->body }}</p>

                    <p><i>{{ $story->footnote }}</i></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
