@extends('layouts.admin.app')
@section ('content')
<div class="main-content" style="min-height: 514px;">
    <section class="section">
      <div class="section-header">
        <h1>Category</h1>
        <div class="section-header-button">
          <a href="features-post-create.html" class="btn btn-primary">Add New</a>
        </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Category</a></div>
          <div class="breadcrumb-item">All Category</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Category</h2>
        <p class="section-lead">
          You can manage all categories, such as editing, deleting and more.
        </p>

        <div class="row"></div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>All Category</h4>
              </div>
          
              <div class="clearfix mb-3"></div>

                <div class="table-responsive">
                  <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                        </tr>
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
