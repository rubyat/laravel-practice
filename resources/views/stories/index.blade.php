@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Stories
                    <a href="{{ route('stories.create') }}" class="float-right">+New</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Type</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            <tbody>
                                @foreach ($stories as $story)

                                    <tr>
                                        <td>{{ $story->title }}</td>
                                        <td>{{ $story->type }}</td>
                                        <td>{{ $story->status == 1 ? 'Yes' : 'No' }}</td>
                                        <td>
                                            @can('view', $story)
                                                <a class="btn btn-sm btn-success" href="{{ route('stories.show', [$story]) }}">View</a>
                                            @endcan
                                            
                                            @can('update', $story)
                                            <a class="btn btn-sm btn-primary" href="{{ route('stories.edit', [$story]) }}">Edit</a>
                                            @endcan

                                            @can('delete', $story)
                                            <form action="{{ route('stories.destroy', [$story] ) }}" method="POST" style="display: inline-block">
                                            
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            
                                            </form>
                                            @endcan


                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    

                    <div class="my_pagi">
                        {{ $stories->links() }}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
