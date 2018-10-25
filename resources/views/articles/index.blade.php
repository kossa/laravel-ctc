@extends('default')

@section('css')
    <style>
        @media print{
            .hidden-print{display: none}
        } 
    </style>
@endsection

@section('main')
    <button class="hidden-print" onClick="window.print()">Print</button>

    <h1>Liste articles</h1>

    <form action="" class="form-inline">
        <input type="search" value="{{ request('search') }}" class="form-control" placeholder="Recherche..." name="search">
        <button class="btn btn-warning"><i class="fa fa-search"></i></button>
    </form>
    
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

    {{ $articles->appends(['search' => request('search')])->links() }}

@endsection