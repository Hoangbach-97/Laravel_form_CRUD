@extends('layout')

@section('content')
<h1>EDIT Page</h1>
<div class="col-sm-6">
    <form method="post" action="/saveedit/{{$cac->id}}">
        @csrf
        <div class="form-group" >
            <label for="">Name </label>
           
            <input type="text" class="form-control" name="name"  placeholder="Enter Name" value="{{$cac->name}}">
          </div>

        <div class="form-group" >
          <label for="">Email </label>
          <input type="email" class="form-control" name="email"  placeholder="Enter email" value="{{$cac->email}}">
        </div>

        <div class="form-group" >
            <label for="">Address </label>
            <input type="text" class="form-control" name="address"  placeholder="Enter address" value="{{$cac->address}}">
          </div>

        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>
@endsection
      
