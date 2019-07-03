@extends('layouts.master')

@section('title','Article')
    
@section('content')
    <div class="row"> 
        <h2 class="pull-left">List Article</h2>
        @if (Auth::user()->hasRole('manager'))
        <form>
            <div class="float-right">
                <a href= "{{route("article.create")}}" class="pull-rigth btn btn-raised btn-primary">Create</a>
            </div>
        </form>            
        @endif       
        <div class="article.list">@include('article.list')</div>
    </div>
@endsection
