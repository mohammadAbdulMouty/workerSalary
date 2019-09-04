@extends('home')

@section('content')
<div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
      <form class="form-horizontal" action="{{url('/payment/add')}}" method="POST">
        {{ csrf_field() }}  
        <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 control-label">Worker</label>
              <div class="col-sm-10">
                <select class="form-control" name="worker">
                  @foreach ($workers as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 control-label">date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="date2" id="inputPassword3" value="<?php echo date('Y-m-d'); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 control-label">Amount of Payment</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="Amount" id="inputPassword3" >
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