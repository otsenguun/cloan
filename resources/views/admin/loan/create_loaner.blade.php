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
        <h2 class="section-title">Зээл</h2>
        <!-- <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> -->
        <form action="{{url('orderLend')}}" method="post" class="forme">
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
                        <input type="hidden" class="form-control phone-number" name="currency" value="MNT">
                        <input type="number" class="form-control phone-number" name="amount">
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
                    <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-md">
                
                        <tr>
                            <td>Зээлийн дүн</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>Хүү</td>
                            <td>3%</td>
                        </tr>
                        <tr>
                            <td>Шимтгэл</td>
                            <td>50₮</td>
                        </tr>
                        <tr>
                            <td>Виртуал</td>
                            <td>0,26</td>
                        </tr>
                        </table>
                    </div>
                    
                    </div>
                </div>
                <hr>
                    <div class="text-md-right">
                        <div class="float-lg-left mb-lg-0 mb-3">
                            @if($msj != "")
                                <a href="{{url('Loanhistory')}}" class="btn btn-primary btn-icon icon-left render">Жагсаалт</a>
                            @else
                                <button class="btn btn-primary btn-icon icon-left" type="submit"><i class="fas fa-credit-card"></i> Баталгаажуулах</button>
                            @endif   
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Цуцлах</button>
                        </div>
                        <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Хэвлэх</button>
                    </div>
            </div>
        </div>
        </form>
        </div>
    </section>

</div>
    @endsection