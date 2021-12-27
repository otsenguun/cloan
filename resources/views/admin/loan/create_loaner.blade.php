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
                    <h1>Зээлдүүлэх</h1>
                    <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Нүүр хуудас</a></div>
                    <div class="breadcrumb-item"><a href="#">Захиалга</a></div>
                    <div class="breadcrumb-item">Зээлдүүлэх</div>
                    </div>
                </div>



        <div class="section-body card-custom">
        <h2 class="section-title">Зээлдүүлэх</h2>
        <!-- <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> -->
        <form action="{{url('calculateLoaner')}}" method="get" class="calculateLoaner">
        <div class="row">
            <div class="col-md-8 col-md-6 col-lg-6">
                    @if($msj != "")
                        <div class="alert alert-primary">
                            {{$msj}}
                        </div>
                    @endif
                <div class="form-group">
                    <label>Зээлдүүлэх дүн</label>
                    <div class="input-group">
                        <input type="hidden" class="form-control phone-number" name="currency" value="MNT" >
                        <input type="number" sync="number" class="form-control phone-number" name="amount" id="lend_input">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            MNT ₮
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                            <td id="calculate_price">-</td>
                        </tr>
                        <tr>
                            <td>Хүү</td>
                            <td>3%</td>
                        </tr>
                        <tr>
                            <td>Шимтгэл</td>
                            <td>50₮</td>
                        </tr>
                        </table>
                    </div>
                    
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
              
                        <button class="btn btn-primary btn-icon icon-left" id="checkLend" type="button"><i class="fas fa-credit-card"></i> Шалгах</button>
                        <!-- <a class="btn btn-primary btn-icon icon-left hidden" id="borrowconfirm" href="{{url('orderLendConfirm')}}"><i class="fas fa-credit-card"></i> Баталгаажуулах</a> -->
               
                        <!-- <a class="btn btn-danger btn-icon icon-left hidden" id="borrowcancel" href="{{url('orderLendCancel')}}"><i class="fas fa-times"></i> Цуцлах</a> -->
                 
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