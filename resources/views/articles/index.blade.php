@extends('default')


@section('main')
    <h1>Liste articles</h1>

    @php
        $var = 10;
    @endphp

    @isset ($var)
        variable existe
    @else
        n'existe pas
    @endisset


    @empty ($var)
        Vide
    @else
        non vide
    @endempty


    @forelse ($articles as $article)
        @if ($loop->first)
            Premier article
        @endif
        @if ($loop->last)
            dernier article
        @endif
        @include('articles._article')
    @empty
        <h3>Pas d'articles</h3>
    @endforelse
    {{-- comment --}}


@endsection

