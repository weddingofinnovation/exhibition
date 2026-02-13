@extends('layouts.app')

@section('page_title', $mag->tittle)
@section('page_description', $mag->s_desc)
@section('page_keyword', 'Exhibition Network, Trade Shows, Business Events')

@section('content')

<main>
	<style>
		.blog-content ul {
			padding-left: 20px;
		}
		.blog-content li {
			margin-bottom: 8px;
		}
		.blog-content div {
			margin-bottom: 15px;
		}
	</style>

<!-- HERO SECTION -->
<section class="bg-dark-overlay-4"
style="background-image:url({{ asset('storage/mags/'.$mag->image) }}); background-size:cover;">
    <div class="container py-5">
        <h1 class="text-white">{{ $mag->tittle }}</h1>

        <ul class="nav nav-divider text-white align-items-center">

            <li class="nav-item">
                By 
                <a href="{{ route('blog.author',$mag->user->slug) }}" class="text-warning">
                    {{ $mag->user->name }}
                </a>
            </li>

            <li class="nav-item">
                {{ $mag->created_at->diffForHumans() }}
            </li>

            <li class="nav-item">
                {{ $mag->views_count }} Views
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" 
                   onclick="likePost({{ $mag->id }})"
                   id="like-btn-{{ $mag->id }}">

                    <span id="like-count-{{ $mag->id }}">
                        {{ $mag->likedUsers->count() }}
                    </span>

                    <i class="bi 
                    {{ auth()->check() && auth()->user()->likedMags->contains($mag->id) 
                        ? 'bi-hand-thumbs-up-fill text-danger' 
                        : 'bi-hand-thumbs-up' }}">
                    </i>
                </a>
            </li>

        </ul>
    </div>
</section>

<!-- BLOG CONTENT -->
<section class="py-5">
<div class="container">
<div class="row">

<div class="col-lg-8">

@php
    $firstLetter = substr(strip_tags($mag->desc),0,1);
@endphp

<p>
    <span class="dropcap">{{ $firstLetter }}</span>
    {!! substr($mag->desc,1) !!}
</p>

</div>

<!-- SIDEBAR -->
<div class="col-lg-4">

<h5>Related Posts</h5>

@foreach($relatedpost as $post)

<div class="card mb-3">
    <a href="{{ route('blog.details',$post->slug) }}">
        <img src="{{ asset('storage/mags/'.$post->image) }}" 
             class="card-img-top">
    </a>

    <div class="card-body">
        <h6>
            <a href="{{ route('blog.details',$post->slug) }}">
                {{ Str::limit($post->tittle,60) }}
            </a>
        </h6>
    </div>
</div>

@endforeach

</div>

</div>
</div>
</section>

</main>

@endsection
