@extends('layout.app')
@section('content')

<div class="my-3">
    <h5 class="float-left">Actors</h5>
    <a class="btn btn-danger float-right" href="{{URL::to('add-actor')}}">Add Actor</a>
        {{-- <a href="{{URL::to('add-movie')}}" ></a> --}}
</div>

<br><br>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Date of Birth</th>
            <th>Bio</th>
            <th>Action</th>
        </tr>
    </thead>
    @if (count($list) >0 )
    <tbody>
        @foreach ($list as $ls)
        <tr>
            <td>1</td>
            <td>{{$ls->name}}</td>
            <td>{{$ls->sex}}</td>
            <td>{{$ls->dob}}</td>
            <td>{{$ls->bio}}</td>
            <td>
                <a href="{{URL::to('actor/'.$ls->id)}}" class="stretched-link text-success" style="position: relative;">View</a> /
                <a href="{{URL::to('edit-actor/'.$ls->id)}}" class="stretched-link text-success" style="position: relative;">Edit</a> /
                <a href="{{URL::to('delete-actor/'.$ls->id)}}" class="stretched-link text-danger" style="position: relative;">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection