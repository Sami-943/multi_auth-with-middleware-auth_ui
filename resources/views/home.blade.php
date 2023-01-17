@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User{{ __('Dashboard') }}</div>

                    <h3>This is User Home Page!</h3>

                    <table >
                    <thead>
                        <th>id</th>
                        <th>Title</th>
                        <th>Description</th>
                    </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td><button>Book event</button></td>
                        
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
