@extends('admin.app')


@section('content')
  <!-- Main Content -->
  <style>
           .custom_card{
      border:solid 1px;
    }
  </style>
<div class="main-content">

        <section class="section">
        <div class="section-header">

                <h1>Нүүр</h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Хэрэглэгч</div>
                </div>
                </div>
                <div class="section-body">
                       
                @if (\Session::has('success'))
                <div class="alert alert-success">
                        <ul>
                        <li>{!! \Session::get('success') !!}</li>
                        </ul>
                </div>
                @endif
                <div class="row">
                        <div class="col-md-12">
                                <div class="row">
                             

                                        @foreach($cryptos->gen_exchrate_cryptolist as $key => $cryp)
                      <div class="col-lg-3 order-lg-1 mb-5 mb-lg-0">
                        <div class="card border-info mb-3 custom_card">
                         
                          <div class="card-body">
                             <div class="text-center">
                                @php
                                        $img = App\Helpers\AppHelper::getCryptoIMG($cryp->CL_CRYPTO_SNAME,0);
                               @endphp
                               <img src="data:image/png;base64,<?php echo base64_encode($img);?>" alt="Base 64 encoded!" style="width:50px;height:50px"/>
                           
                               <h3>{{$cryp->CL_CRYPTO_SNAME}}</h3>

                              
                             </div>
                             <hr>
                            <div class="row">
                              <div class="col-md-6">
                              <b>Үнэ</b>
                              </div>
                              <div class="col-md-6" id="cryp_price{{$cryp->id}}">
                              {{number_format($cryp->CL_CRYPTO_PRICE,6)}}
                              </div>
                              <div class="col-md-6">
                              <b>Валют</b>
                              </div>
                              <div class="col-md-6">
                                {{$cryp->CL_CRYPTO_PRICE_CURRENCY}}
                              </div>
                              <hr>
                              <div class="col-md-12" id="cryp_date{{$cryp->id}}">
                                {{$cryp->CL_FECHED_DATE}}
                              </div>
                        
                            </div>
                   
                          </div>
                        </div>
                      </div>
                      @endforeach
                                </div>
                        </div>
                        <div class="col-md-12">
  

                        </div>
                      
                </div>

                </div>

        
        </section>
    
</div>
@endsection

<script>
        var counter = 0;
        var i = setInterval(function(){
        // do your thing
        $.ajax({
                url: "{{url('get_last_curr')}}",
                context: document.body
                }).done(function(response) {
                        let result = JSON.parse(response);
                        // console.log(result);
                        $.each(result, function( index, value ) {
                                // alert( index + ": " + value );
                                $("#cryp_price"+value.id).html(parseFloat(value.CL_CRYPTO_PRICE).toFixed(6));
                                $("#cryp_date"+value.id).html(value.CL_FECHED_DATE);
                        });
                        // console.log(result);
                        // $(".render").removeClass("active");
                        // anchor.addClass("active");
                        // $(".section").html(rendered_html);
                        
                }).fail(function(data, textStatus, xhr) {
                        //This shows status code eg. 403
                        // console.log("error", data.status);
                        if(data.status == 401){
                        window.location.replace("{{url('/me')}}");
                        }
                        
                });
        // counter++;
        // console.log(counter);
        }, 10000);
</script>
