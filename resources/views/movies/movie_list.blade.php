@extends('layouts.master')

@section('content')
<div class="row">
    <h1 class="col=md-3">Popular Movies</h1>
</div>
<div class="row">
    <div class="col-md-3">
            @foreach ($response['results'] as $title)
                <h2>{{$title['title']}}</h2>
            @endforeach
            @foreach ($response['results'] as $release)
                <small>release: {{$release['release_date']}}</small>
            @endforeach
            <h4>Synopsis:</h4>
            @foreach ($response['results'] as $overview)
                <div class="col-md-3">{{$overview['overview']}}</div>
            @endforeach
            <input type="button btn-primary" value="Details">
        </div>
    </div> 
@endsection