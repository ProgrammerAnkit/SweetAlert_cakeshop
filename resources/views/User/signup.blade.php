
@extends('layout.updatedMaster')

@section('content')

    <div class="container-fluid ">
        <div class="row justify-content-center    ">
            <div class="col-md-4 col-md-offset-4 center">
                <h1 class="text-center">Signup Page</h1>
                <br>
                <form action="{{ route('User.signup')}}" method="POST">
                        {{ csrf_field() }}
                    @if (count($errors) > 0)
                    <div class=" alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                        
                    @endif
                      
                    <div class="form-group">
                        <label for= "email"> E-Mail</label>

                        <input type="text" id="email" name="email" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for= "password">password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Sing Up</button>
                 
                </form>
        
            </div>
        </div>
        
    </div>

    @endsection
 
    @section('script')
        
    @endsection
    