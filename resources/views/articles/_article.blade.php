<h4>{{ $loop->iteration }} - {{ $article->name }}</h4>
<p>{{ $article->body }}</p>
<hr>

@component('button')
    Lire la suite
@endcomponent