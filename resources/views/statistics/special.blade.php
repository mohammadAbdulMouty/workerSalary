@extends('home')

@section('content')
    <form class="form-spcial-user">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <select class="form-control spcial-user-select" onmousedown="if(this.options.length>8){this.size=8;}" onchange='this.size=0;' onblur="this.size=0;">
            <option value="0">no select</option>
            @foreach ($worker as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <input type="button" class="btn btn-info btn-go-spcial-user" value="go">
    </form>
    <div class="container-spacial-user">
            
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let tltoUsd = '';
        axios.get('http://apilayer.net/api/live?access_key=f58bc8fa684ccbe07340fbe328de5704').then(function (response) {
    // handle success
        tltoUsd = response.data.quotes.USDTRY;
  })
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
        });


   
      let selectval = $('.spcial-user-select');
      
       $('.btn-go-spcial-user').on('click',function(){
       
           $.ajax({
               method:'POST',
               url:url,
               data:{
                    user_id : selectval.val(),
                   _token:token
               }
           }).done(function(msg){
               let primryTime = msg['worker'][0]['primaryTime'];
               let overcalculate = msg['worker'][0]['overcalculate'];
               let hourPrice = msg['priceofhour'][0]['price'];
               let amountDepts = msg['depts'][0]['amount'];
               let amountPayments = msg['payments'][0]['amount'] == null ? 0 :msg['payments'][0]['amount'];
               let output = `
               <div class="card card-outline card-success">
                    <div class="card-header">
                      <h3 class="card-title">Name of Worker</h3>
      
                      <div class="card-tools">
                        
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="callout callout-warning">
                                    <h5>Total Primary Hours</h5>
                                    <p>${primryTime}</p>
                            </div>
                            <div class="callout callout-success">
                                    <h5>Total over Hours</h5>
                                    <p>${overcalculate}</p>
                            </div>
                            <div class="callout callout-info">
                                    <h5>Price of Hour</h5>
                                    <p>${hourPrice}</p>
                            </div>
                            <div class="callout callout-danger">
                                    <h5>payment</h5>
                                    <p>${amountPayments}</p>
                                    <h5>Depts</h5>
                                    <p>${amountDepts}</p>
                            </div>
                            <div class="alert alert-success alert-dismissible">
                                    
                                    <h5><i class="icon fas fa-check"></i> Total Salary:</h5>
                                    <h5><i class="icon fas fa-lira-sign"></i> ${(((primryTime+overcalculate)*hourPrice)+amountDepts)-amountPayments} </h5>
                                    <h5><i class="icon fas fa-dollar-sign"></i> ${((((primryTime+overcalculate)*hourPrice)+amountDepts)-amountPayments)/tltoUsd} -----${tltoUsd}</h5>
                                    
                            </div>
                    </div>
                    <!-- /.card-body -->
            </div>
               `;
               $('.container-spacial-user').html(output);
           })
       })
     
    </script>
@endsection