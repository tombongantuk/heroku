@extends('layouts.master')
@foreach ($comments as $comment)
    <div style="outline: 1px solid #74AD1B;">
        <p>{!! $comment->content !!}</p>
        <i>{!! $comment->user !!}</i>
    </div>    
@endforeach