@foreach ($article as $article)
    <div class="row">
        <h1>{!!$article->title!!}</h1>
        <p>{!!$article->created_at!!}</p>
        {!! str_limit($article->content, 100) !!}
        
        <a href="{{route('article.show',$article->id)}}">Read more</a>
        @if ($article->comments)
        {{$article->comments->count()}}
        @else 
        0   
        @endif
        </p>        
    </div>
@endforeach
<div class="row">
    <div class="col">{{$article->links('vendor.pagination.bootstrap-4')}}</div>
</div>

