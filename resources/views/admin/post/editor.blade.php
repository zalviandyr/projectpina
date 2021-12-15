@extends('layouts.admin.app')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-back">
          <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>{{ $tittle }} Article</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="/post">Article</a></div>
          <div class="breadcrumb-item">{{ $tittle }} Article</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">{{ $tittle }} Article</h2>
        <p class="section-lead">
          On this page you can create a new article and fill in all fields.
        </p>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create Your Article</h4>
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
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote-simple" name="body">{{ @$post->body }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 for="formFile" class="form-label">Add Media</label>
                    <div class="col-sm-12 col-md-7">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                    <div class="col-sm-12 col-md-7">
                      <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below"><div class="selectric-hide-select"><select class="form-control selectric" tabindex="-1">
                        <option>Tech</option>
                        <option>News</option>
                        <option>Political</option>
                      </select></div></div>
                    </div>
                  </div>
                  
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Save</button>
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