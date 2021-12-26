
@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">

<style>
    .card-custom{
  border: 1px solid #ccc;
  padding: 5px 10px 10px 20px;
  border-radius:20px;
}
</style>

<div class="section-header">
            <h1>Захиалга үүсгэх</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Нүүр хуудас</a></div>
              <div class="breadcrumb-item"><a href="#">Захиалга</a></div>
              <div class="breadcrumb-item">Захиалга үүсгэх</div>
            </div>
          </div>



<div class="section-body card-custom">
  <h2 class="section-title">Зээл</h2>
  <!-- <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> -->
  <form action="{{url('CalculateOrderBorrow')}}" method="post" class="check_form">
  <div class="row">
      
        <div class="col-md-8 col-md-6 col-lg-6">
            @if($msj != "")
            <div class="alert alert-primary">
                {{$msj}}
            </div>
            @endif
            <div class="form-group">
                <label>Зээлэх дүн</label>
                <div class="input-group">
                    
                    <input type="text" class="form-control phone-number" name="priority" step=any>
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        MNT ₮
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Виртуал хөрөнгийн дүн</label>
                <div class="input-group">
                    
                    <input type="number" class="form-control phone-number" name="amount" step=any>
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                    <select name="crypto_sname" id="" class="form-control">
                        @foreach($coins->gen_cryptos as $coin)
                           <option value="{{$coin->CL_CRYPTO_SNAME}}">{{$coin->CL_CRYPTO_SNAME}}</option>
                        @endforeach
                    </select>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Зээлэх хувь /LTV/</label>
                        <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="50" class="selectgroup-input percent" checked="">
                            <span class="selectgroup-button">20%</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="100" class="selectgroup-input percent">
                            <span class="selectgroup-button">30%</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="150" class="selectgroup-input percent">
                            <span class="selectgroup-button">40%</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="200" class="selectgroup-input percent">
                            <span class="selectgroup-button">50%</span>
                        </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Зээлэх хугацаа</label>
                        <div class="input-group">
                            
                    
                            
                            <select name="" id="" class="form-control">
                                <option value="">7 хоног</option>
                                <option value="">14 хоног</option>
                                <option value="">21 хоног</option>
                                <option value="">28 хоног</option>
                            </select>
                        
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="row mt-4">
                <div class="col-md-12 result_div">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-md">
            
                    <tr>
                        <td>Зээлийн дүн</td>
                        <td align="right" id="calculate_price">-</td>
                    </tr>
                    <tr>
                        <td>Хүү</td>
                        <td align="right" id="calculate_precent">3%</td>
                    </tr>
                    <tr>
                        <td>Шимтгэл</td>
                        <td align="right">50₮</td>
                    </tr>
                    <tr>
                        <td>Виртуал</td>
                        <td align="right" id="calculate_crypto">0</td>
                    </tr>
                    </table>
                </div>
                
                </div>
            </div>
            <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
                    
                        <button class="btn btn-primary btn-icon icon-left" id="checkBorrow" type="button"><i class="fas fa-credit-card"></i> Шалгах</button>

                    </div>
                    <button class="btn btn-warning btn-icon icon-left" type="button"><i class="fas fa-print"></i> Хэвлэх</button>
                </div>
        </div>
    
  </div>
  </form>
</div>

</section>
    
    </div>
    @endsection
    
    <script>
       
    </script>