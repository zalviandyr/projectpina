@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 514px;">
    <section class="section">
      <div class="section-header">
        <h1>Article</h1>
        <div class="section-header-button">
          <a href="{{ $route }}" class="btn btn-primary">Add New</a>
        </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="/post">Article</a></div>
          <div class="breadcrumb-item">Table List</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Article</h2>
        <p class="section-lead">
          You can manage all article, such as editing, deleting and more.
        </p>

        <div class="row">
          
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Table List</h4>
              </div>
              <div class="card-body">
                

                <div class="table-responsive">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Tittle</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($posts as $post)     
                            <tr>
                                <td>{{ $post->tittle }}
                                </div>
                                </td>
                                <td>{{ @$post->body }}
                                  <div>
                                    <td>
                              
                                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                      <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                  </div>
                                </td>
                                {{-- <td><div class="table-links">
                                  <a href="{{ route('post.edit',$post->id) }}">Edit</a>
                                  <div class="bullet"></div>
                                  <a href="#" onclick="event.preventDefault(); $('#destroy-{{ $post->id }}').submit()">Delete</a>
                                  <div class="bullet"></div>
                                  <form id="destroy-{{ $post->id }}" action="{{ route('post.destroy',$post->id) }}" method="POST">
                                      @csrf 
                                      @method('DELETE')
                                  </form></td> --}}
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('script')
    <script>
            $(document).ready( function () {
               $('#table_id').DataTable();
            } );
    </script>
@endsection