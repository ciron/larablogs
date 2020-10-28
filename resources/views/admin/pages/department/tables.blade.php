@extends('admin.master')

@section('main_admin')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Department List</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            @if(session('catupdate'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('catupdate')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           @endif
           @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           @endif

           @if(session('active'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>{{session('active')}}</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
          @endif
          @if(session('inactive'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{session('inactive')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         @endif
            <thead>
              <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>

              </tr>
            </thead>
            {{-- <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot> --}}
            <tbody>
                @php
                     $i = 1;
                @endphp
                @foreach ($departments as $department)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $department->name }}</td>
                        <td>
                            @if ($department->status==1)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('ddepartment/edit/'.$department->id) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                            <a href="{{ url('admin/department/delete/' .$department->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            @if ($department->status==1)
                            <a href="{{ url('admin/department/inactive/' .$department->id) }}" class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/department/active/' .$department->id) }}" class="btn btn-success"><i class="fa fa-arrow-up"></i></a>
                            @endif
                        </td>
                      </tr>
                      @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection

