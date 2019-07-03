@extends('layouts.master')

@section('title','Article')
    
@section('content')
    <h1>Create new article</h1>
    <form class="form-horizontal" name="user-file" role="form" action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-lg 3 control-label">Title</label>
            <div class="col-lg-9">
                <input type="text" name="title"id="title" class="form-control"autofocus="true">   
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <label for="content" class="col-lg 3 control-label">Content</label>
            <div class="col-lg-9">
                <textarea name="editordata" class="form-control" id="content" rows="10"></textarea> 
            </div>
            <div class="clear"></div>
         </div>
         <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                  var file = $(this).val().split("\\").pop();
                  $(this).siblings(".custom-file-label").addClass("selected").html(file);
                });
            </script>      
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