  
@foreach ($article as $articles)
    <article class="row">
        <h1>{!!$articles->title!!}</h1>
        <p>
            {!! str_limit($articles->content, 250) !!}
        <a href={{route('article.show')}},$article->id>Read more</a>
        </p>
    </article>
@endforeach

