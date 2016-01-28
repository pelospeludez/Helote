@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    @foreach($articles as $article)
    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="article">
            <img class="featurette-image img-circle img-responsive pull-right" src={{$article->image}}>
            <h2 class="featurette-heading">{{$article->tittle}}
                <span class="text-muted"></span>
            </h2>
            <p class="lead">{{$article->body}}</p>
        </div>

        <hr class="featurette-divider">


    @endforeach
@endsection
{{ Html::style('css/one-page.wonder.css') }}