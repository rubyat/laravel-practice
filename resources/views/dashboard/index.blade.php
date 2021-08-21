@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Home Page
                    <div class="float-right">
                        <a href="{{ route('dashboard.index') }}">All</a> |
                        <a href="{{ route('dashboard.index', ['type' => 'short']) }}">Short</a> |
                        <a href="{{ route('dashboard.index', ['type' => 'long']) }}">Long</a> 

                    </div>
                </div>

                <div class="card-body">
                    

                    
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Type</td>
                                <td>Author</td>
                            </tr>
                            <tbody>
                                @foreach ($stories as $item)

                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    

                    <div class="my_pagi">
                        {{ $stories->withQueryString()->links() }}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
