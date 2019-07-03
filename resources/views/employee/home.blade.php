@extends('layouts.master')

@section('content')
<div class="container">
        <div class="mt-50">
            <h1>Emplpoyee Dashboard</h1>
            <h3>You are logged in as {{Auth::user()->name}}</h3>
        </div>  
</div>
@endsection
