@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Detalle Del Articulo</h1>
        </div>
        <div class="col-12 col-md-3 mt-5">
            <div class="card" style="width: 18rem;">
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
                    <h5 class="card-title">{{$article->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$article->price}}</h6>
                    <p class="card-text"> {{$article->description}}</p>
                    <div class="d-flex flex-column">
                        <a href="{{route('articles.category',['name'=>$article->category->name,'id'=>$article->category->id])}}">{{$article->category->name}}</a>
                        @foreach ($article->tags as $tag)
                        <a href="">#{{ $tag->name }}</a>
                        @endforeach
                        <i>{{$article->created_at->format('d/m/Y')}}</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection