@extends('layouts.admin.app')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-back">
          <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>{{ $tittle }} Post</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="/post">Posts</a></div>
          <div class="breadcrumb-item">{{ $tittle }} Post</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">{{ $tittle }} Post</h2>
        <p class="section-lead">
          On this page you can create a new post and fill in all fields.
        </p>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Write Your Post</h4>
              </div>
              <form action="{{ $route }}" method="POST">
                @csrf
                @method($method)
              <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tittle</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="tittle" class="form-control" value="{{ @$post->tittle }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="slug" class="form-control" value="{{ @$post->slug }}">
                    </div>
                </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Excerpt</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="excerpt" class="form-control" value="{{ @$post->excerpt }}">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Body</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote-simple" name="body">{{ @$post->body }}</textarea>
                    </div>
                  </div>
                  
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">{{ $tittle }} Post</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection