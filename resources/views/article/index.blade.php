@extends('layouts.master')

@section('title','Article')
    
@section('content')
    <div class="row"> 
        <h2 class="pull-left">List Article</h2>
        <div class="float-right">
            <a href= "{{route("article.create")}}" class="pull-rigth btn btn-raised btn-primary">Create</a>
        </div>    
    </div>
    
@endsection
@include('article.list')