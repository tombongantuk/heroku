@extends('layouts.master')

@section('title','Article')
@section('content')
    <article class="row">
        <h2>{!! $article->title !!}</h2> 
        <div>{!! $article->content !!}</div> 
    </article>
    <div>
    <form action={{route('arcticle.destroy'),$article->id}} method="DELETE">
            <a href={{route('article.index')}} class="btn btn-raised btn-info">Back</a>
            <a href={{route('article.edit')}} class="btn btn-raised btn-info">Edit</a>
            <input type="submit" value='Delete' class="btn btn-raised btn-danger" onclick="return confirm('are you sure?')">
        </form>
    </div>
@endsection