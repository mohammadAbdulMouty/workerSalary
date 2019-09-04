@extends('home')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">
        Add New Worker
      </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{url('/worker/add')}}" method="POST">
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter the Worker Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Strating date</label>
          <input type="date" class="form-control" name="startwork" id="exampleInputEmail1" value="<?php echo date('Y-m-d'); ?>" >
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">+ Add</button>
      </div>
    </form>
  </div>
@endsection