@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 524px;">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Article</h4>
                  </div>
                  <div class="card-body">
                    {{ $post }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Category</h4>
                  </div>
                  <div class="card-body">
                  {{ $category }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Users</h4>
                  </div>
                  <div class="card-body">
                  {{ $users }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Main Content -->
@endsection
