@extends('home')

@section('content')
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Horizontal Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
  <form class="form-horizontal" action="{{url('/work/hour/add')}}" method="POST">
    {{ csrf_field() }}  
    <div class="card-body">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 control-label">Worker</label>
          <div class="col-sm-10">
            <select class="form-control" name="worker">
              @foreach ($worker as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 control-label">date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="date2" id="inputPassword3" value="<?php echo date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 control-label">Working Time</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="workingtime" id="inputPassword3" >
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 control-label">Over Time</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="overtime" id="inputPassword3" >
          </div>
        </div>
        
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Save</button>
        
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
@endsection