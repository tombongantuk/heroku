@extends('layouts.master')

@section('content')
<div class="container">
    <div class="mt-50">
        <h1>Manager Dashboard</h1>
        <h3>You are logged in as {{Auth::user()->name}}</h3>
    </div>
<a href="{{route('manager-um.index')}}">Manage User</a>
</div>
@endsection
