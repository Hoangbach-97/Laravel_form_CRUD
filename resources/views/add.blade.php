@extends('layout')

@section('content')
<h1>ADD Page</h1>
<div class="col-sm-6">
    <form method="post" action="/add">
        @csrf
        <div class="form-group" >
            <label for="">Name </label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name">
          </div>

        <div class="form-group" >
          <label for="">Email </label>
          <input type="email" class="form-control" name="email"  placeholder="Enter email">
        </div>

        <div class="form-group" >
            <label for="">Address </label>
            <input type="text" class="form-control" name="address"  placeholder="Enter address">
          </div>

        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>
@endsection
      
