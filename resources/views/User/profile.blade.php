@extends('layout.updatedMaster')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

<h1>User Profile</h1>


@endsection
 
@section('script')
    
@endsection
