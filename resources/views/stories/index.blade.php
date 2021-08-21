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
                                @foreach ($stories as $item)

                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->status == 1 ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="{{ route('stories.show', [$item]) }}">View</a>
                                            <a class="btn btn-sm btn-primary" href="{{ route('stories.edit', [$item]) }}">Edit</a>

                                            <form action="{{ route('stories.destroy', [$item] ) }}" method="POST" style="display: inline-block">
                                            
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            
                                            </form>

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
