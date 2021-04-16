
@extends('layout.updatedMaster')

@section('content')

    <div class="container-fluid ">
        <div class="row justify-content-center    ">
            <div class="col-md-4 col-md-offset-4 center">
                <h1 class="text-center">Signin Page2</h1>
                <br>
                    @if ($message = Session::get('failure'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif

                <form action="{{ route('User.signin')}}" method="POST">
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
                    <button type="submit" class="btn btn-primary">Sing IN</button>
                 
                </form>
        
            </div>
        </div>
        
    </div>

    @endsection
 
    @section('script')
        
    @endsection
    