@extends('layouts.master')

@section('content')
    <h3>Edit Article</h3>
    <form action={{route('articel.update',$article->id)}} method="put"
        class="form-horizontal" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-lg 3 control-label">Ttile</label>
                <div class="col-lg-9">
                    <input type="text" id="title" class="form-control">
                    <div class="text-danger">{!!$errors->first('title')!!}</div>
                </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <label for="content" class="clo-lg 3 control-label">Content</label>
            <div class="col-lg-9">
                <textarea id="content" class="form-control" rows="10"></textarea>
                <div class="text-danger">{!!$errors->first('content')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-9">
                <input type="submit" value="save" class="btn btn-raised btn-primary">
                <a href="{{route('article.index')}}" class="btn btn-raised btn-info">Back</a>
            </div>   
            <div class="clear"></div>
        </div>
    </form>  
@stop