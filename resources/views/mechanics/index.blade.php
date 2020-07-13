
@extends('layouts.app')
@section('title', 'Mechanic')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Mechanics</h5>
    </div>
    <div class="container"> 
      <a class="btn btn-primary mb-4" href="{{ url('/mechanics/create') }}">Add Mechanic</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Date Created</th>
            </tr>
          </thead>
          <tbody>
             @foreach($mechanics as $mechanic)
              <tr>
                <th scope="row"><a href="/mechanics/{{ $mechanic->id }}">{{ $mechanic->id }}</a></th>
                <td>{{$mechanic->name}}</td>
                <td>{{$mechanic->created_at->diffForHumans()}}</td>
              </tr>
             @endforeach
          </tbody>
        </table>
 
@endsection