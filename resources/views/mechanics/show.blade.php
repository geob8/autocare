@extends('layouts.app')
@section('title', 'Mechanic')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Mechanic Details</h5>
    </div>
    <div>
      <a href="{{ '/mechanics' }}">Back</a>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Mechanic id</th>
                <th scope="col">Name</th>
                <th scope="col">Date Created</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <th scope="row">{{ $mechanic->id }}</th>
              <td>{{$mechanic->name}}</td>
              <td>{{$mechanic->created_at->diffForHumans()}}</td>
              </tr>
            </tbody>
        </table>
        
        <form action="/mechanics/{{ $mechanic->id }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button class="btn btn-danger float-right ml-1">Delete</button>
        </form>
        <div>
            <a href="/mechanics/{{ $mechanic->id }}/edit" class="btn btn-primary float-right">Edit</a>
        </div>
</div>

@endsection