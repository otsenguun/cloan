@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">
        <div class="section-header">

                <h1>Хэрэглэгч дашбоард</h1>
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
                                @foreach($cryptos->gen_exchrate_cryptolist as $cryp)
                        
                                        <div class="col-md-3">
                                                <div class="card">
                                                        <div class="card-header">{{$cryp->CL_CRYPTO_SNAME}}</div>
                                                        <div class="card-body">
                                                                <p>Үнэ : <b id="cryp_price{{$cryp->id}}">{{$cryp->CL_CRYPTO_PRICE}}</b></p>
                                                                <p>Валют : <b>{{$cryp->CL_CRYPTO_PRICE_CURRENCY}}</b></p>
                                                                <p><b id="cryp_date{{$cryp->id}}">{{$cryp->CL_FECHED_DATE}}</b></p>
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
                                $("#cryp_price"+value.id).html(value.CL_CRYPTO_PRICE);
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
