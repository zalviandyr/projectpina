@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-sm-0 main">
      @foreach ($post as $p)
      <div id="unique-entry-id-0" class="blog-entry">
      <h1 class="blog-entry-title"><a href="/post/{{ $p['slug'] }}" class="blog-permalink">{{ $p['Tittle'] }}</a></h1>
      <div class="blog-entry-date"> {{ $p['created_at'] }} <span class="blog-entry-category"><a href="files/category-author-by-cecep-abu-azhar.html">Author : {{ $p->user->name }}</a></span></div>
      <div class="blog-entry-body">{{ $p['excerpt'] }}
        <span class="blog-read-more"><a href="/post/{{ $p['slug'] }}">Read More…</a></span>
      </div>
    </div>
        @endforeach
     
    </div>
  </div>
</div>
       

        {!! $post->links ('pagination::bootstrap-4') !!}

@endsection