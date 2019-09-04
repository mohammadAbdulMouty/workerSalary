@extends('home')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">All Price</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>price of hour</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($priceOfHour as $price)
            <tr>
                <td>{{$price->worker->id}}</td></td>
                <td>{{$price->worker->name}}</td>
                <td><span class="badge bg-primary">{{$price->price}}</span></td>
            </tr>
          @endforeach
          
         
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
     
    </div>
  </div>

@endsection