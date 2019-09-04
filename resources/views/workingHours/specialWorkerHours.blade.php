@extends('home')
@section('content')
    <form class="form-spcial-user" method="post" action="/work/hour/special">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <select name="worker" class="form-control spcial-user-select" onmousedown="if(this.options.length>8){this.size=8;}" onchange='this.size=0;' onblur="this.size=0;">
            <option value="0">no select</option>
            @foreach ($worker as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-info btn-go-spcial-user" value="go">
    </form>
    
@endsection
@section('script')
    
    @endsection