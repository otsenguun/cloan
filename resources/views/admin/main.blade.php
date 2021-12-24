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
                <div class="row">
                        @foreach($cryptos->gen_exchrate_cryptolist as $cryp)
                        <div class="col-md-3">
                                <div class="card">
                                        <div class="card-header">{{$cryp->CL_CRYPTO_SNAME}}</div>
                                        <div class="card-body">
                                                <p>Үнэ : <b>{{$cryp->CL_CRYPTO_PRICE}}</b></p>
                                                <p>Валют : <b>{{$cryp->CL_CRYPTO_PRICE_CURRENCY}}</b></p>
                                                <p><b>{{$cryp->CL_FECHED_DATE}}</b></p>
                                        </div>
                                </div>
                        </div>
                        @endforeach
                </div>

                </div>

        
        </section>
    
</div>
@endsection
