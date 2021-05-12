@extends('layout')

@section('content')

<table class="table table-bordered">
<h1>List</h1>
@if(Session::get('tentrangthai'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('tentrangthai')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if(Session::get('tentrangthaixoa'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{Session::get('tentrangthaixoa')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if(Session::get('tentrangthaiedit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('tentrangthaiedit')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

    <thead class="thead-dark">
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
        @foreach($lol as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->email}}</td>
        <td>
          <a href="delete/{{$item->id}}"><i class="fas fa-trash"></i></a>
          <a href="edit/{{$item->id}}"><i class="fas fa-edit"></i></a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
 
@endsection

