@extends('layouts.master')

@section('title','Article')
    
@section('content')
    <h1>Create an Article</h1>
    <form class="form-horizontal" role="form" action="{{route('article.store')}}" method="POST">
    {{csrf_field()}}
        <div class="form-group">
            <label for="title"class="col-lg 3 control-label">Title</label>
            <div class="col-lg-9">
                <input type="text"  id="title" class="form-control">   
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <label for="content" class="col-lg 3 control-label">Content</label>
            <div class="col-lg-9">
                <textarea id="summernote" name="editordata"class="form-control" id="content" rows="10"></textarea>   
            </div>
            <div class="clear"></div>
         </div>
         <div class="form-group">
            <div class="col-lg-9">
                <a href="{{route('article.index')}}" class="btn btn-raised btn-info">Back</a>
                <input type="submit" value="Save"class="btn btn-raised btn-primary">
            </div>   
            <div class="clear"></div>
        </div>
    </form>
@endsection