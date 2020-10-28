@extends('admin.master')

@section('main_admin')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Add Department</h6>
      </div>
      <div class="card-body">
        @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        <form action="{{ route('department.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control  @error('name')is-invalid @enderror" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Department..">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection

