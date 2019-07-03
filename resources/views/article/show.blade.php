@extends('layouts.master')

@section('title','Article')
@section('content')
    <div class="row">
        <h1>{!! $article->title !!}</h1> 
        <p>{!! $article->content !!}</p>
        <i>{!! $article->user!!}</i> 
    </div>
    <div>
    <h3><i>Give us Comment</i></h3>
    <form class="form-horizontal form-comment" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="article_id" class="col-lg-3 control-label">Title</label>
            <div class="col-lg-9">
                <input type="text" id="article_id" value="$article->id" class="form-control" role="readonly">
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <label for="content" class="col-lg-3 control-label">Content</label>
            <div class="col-lg-9">
                <textarea name="content" id="content" class="form-control"rows="10" autofocus="true"></textarea>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <label for="user" class="col-lg-3 control-label">User</label>
            <div class="col-lg-9">
                <input type="text" id="user" value="" class="form-control">
            </div>
            </div> 
        </div>
        <div class="clear"></div>
        <div class="form-group">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <input class="comment"type="button" value='Save' class="btn btn-primary">
            </div>
            <div class="clear"></div>    
        </div>              
    </form>
    </div>
    <div class="comment-list">
        @include('article.comment_list')
    </div>
@endsection