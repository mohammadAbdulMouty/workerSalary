@extends('home')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Hours for {{$worker->name}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead>                  
          <tr>
            
            <th>date</th>
            <th>Primary Hours</th>
            <th >extra Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($hours as $item)
            <tr>
                    
            <td>{{$item->date}}</td>
            <td>{{$item->primaryTime}}</td>
            <td>{{$item->overTime}}</td>
            
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
@endsection