@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADMIN{{ __('Dashboard') }}</div>

                <h3>This is Admin Home Page!</h3>

                <form action="{{url('/form')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="fname"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="lname"><br><br>
                    {{-- <input type="file" id="lname" name="image" value=""><br><br> --}}
                    <input type="submit" value="Submit">
                  </form> 

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
