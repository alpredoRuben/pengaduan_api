@extends('layouts.backend')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Master Roles</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">
        <a href="#">List Roles</a>
      </div>
      <div class="breadcrumb-item">
        <a href="#">Tambah Roles</a>
      </div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">List Roles</h2>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="card">
          <div class="card-body p-1">
            
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <thead>
                  <tr class="text-center">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($records as $key => $row)
                    <tr>
                      <td class="text-center">{{ $key + $records->firstItem() }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->slug }}</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-edit"></i> Edit
                        </button>

                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i> Delete
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
	            
            </div>
            
          </div>

          {{ $records->links('customs.pagination') }}

        </div>
      </div>

    </div>
  </div>
</section>
@endsection