@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">

<div class="section-header">
            <h1>Хэрэглэгчид</h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Хэрэглэгчид</div>
                </div>
          </div>
<div class="section-body">

<div class="row mt-sm-4">
         
        <div class="card">
            <div class="card-header">
                <h4>insertFlatCurrencyRate</h4>
            </div>
            <div class="card-body">
                @if($msj != "")
                <div class="alert alert-primary">
                    {{$msj}}
                    </div>
                @endif
                <form action="{{url('storeRate')}}" method="post" class="forme">
                <div class="form-group">
                    <label>Зээлэх дүн</label>
                    <div class="input-group">
                        
                        <input type="number" class="form-control phone-number" name="rate_amount" step=any>
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            MNT ₮
                        </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-sm btn-primary">
                </div>

                </form>
            </div>
        </div>
</div>

</div>
</section>
    
</div>
@endsection
