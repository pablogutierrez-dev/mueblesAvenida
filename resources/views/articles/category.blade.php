@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Categoría: {{$category->name}}</h1>
        </div>
        @foreach($articles as $article)
        <div class="col-12 col-md-3 mt-5">
            <div class="card mb-5" style="width: 18rem;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner w-100" style="height: 150px">
                        @foreach ($article->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->file)}}"" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> {{$article->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$article->price}}</h6>
                    <p class="card-text"> {{$article->description}}</p>
                    <h6 class="card-subtitle mb-2">
                        <strong>Categoria: <a href="#">{{$article->category->name}}</a></strong>
                        <i>{{$article->created_at->format('d/m/Y')}} - {{ $article->user->name }}</i>
                    </h6>
                    <a href="{{route("articles.details", ['id'=>$article->id])}}">Detalles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row my-3">
        <div class="col-12 d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
