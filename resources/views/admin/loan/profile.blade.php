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

            <h1>Хэтэвч</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Хэрэглэгч</div>
            </div>
          </div>
          <div class="section-body">
          
            <div class="row mt-sm-4">
              <div class="col-md-12 ">
                <div class="card profile-widget">
                
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">
                      {{$user->username}} 
                      <table class="table">
                          <tbody>
                                <tr>
                                  <td>KYC зөвшөөрсөн эсэх</td>
                                  <td>
                                    @if($user->userlegit->CL_KYC_ISAPPROVED == 1)
                                        <span class="btn btn-success">Зөвшөөрсөн</span>
                                    @else
                                        <a href="{{url('user_details')}}"><span class="btn btn-danger">Зөвшөөрөөгүй</span></a> 
                                    @endif
                                  </td>
                                </tr>
                            
                                <tr>
                                  <td>Шалтгаан</td>
                                  <td>{{isset($user->userlegit->CL_KYC_REASON) ? $user->userlegit->CL_KYC_REASON : ""}}</td>
                                </tr>
                                <tr>
                                  <td>Нэр</td>
                                  <td>{{isset($user->userlegit->CL_FIRST_NAME) ? $user->userlegit->CL_FIRST_NAME : ""}}</td>
                                
                                </tr>
                                <tr>
                                  <td>Овог</td>
                                  <td>{{isset($user->userlegit->CL_LAST_NAME) ? $user->userlegit->CL_LAST_NAME : ""}}</td>
                                
                                </tr>
                                <tr>
                                  <td>Регистер</td>
                                  <td>{{isset($user->userlegit->CL_COUNTRY_REG) ? $user->userlegit->CL_COUNTRY_REG : ""}}</td>
                                
                                </tr>
                                <tr>
                                  <td>Username</td>
                                  <td>{{$user->username}}</td>
                                </tr>
                          </tbody>
                      </table>
                    </div>
                    </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h4>Crypto Үлдэгдэл</h4>
                  </div>
                  <div class="card-body">
                  <div class="row">
                    @foreach($user->user_cryptos as $key => $crypto)
                      <div class="col-lg-3 order-lg-1 mb-5 mb-lg-0">
                        <div class="card border-info mb-3 custom_card">
                         
                          <div class="card-body">
                             <div class="text-center">
                               <h3>{{$crypto->CL_CRYPTO_SNAME}}</h3>
                             </div>
                             <hr>
                            <div class="row">
                              <div class="col-md-6">
                              <b>Крипто</b>
                              </div>
                              <div class="col-md-6">
                              {{$crypto->CL_CRYPTO_NAME}}
                              </div>
                              <div class="col-md-6">
                              <b>Дүн</b>
                              </div>
                              <div class="col-md-6">
                              {{$crypto->CL_AMOUNT_FULL}}
                              </div>
                              <div class="col-md-6">
                              <b>Түгжигдсэн</b>
                              </div>
                              <div class="col-md-6">
                              {{$crypto->CL_AMOUNT_LOCKED}}
                              </div>
                              <div class="col-md-12 text-center">
                                <hr>
                              <button class="btn btn-sm btn-info inc_button" coin="{{$crypto->CL_CRYPTO_NAME}}" c_address="{{$crypto->CL_PUB_ADDRESS}}">Орлого</button>
                                  <button class="btn btn-sm btn-primary inc_button">Зарлага</button>
                              </div>
                            </div>
                   
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  
                </div>
              </div>
              </div>

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Валют Үлдэгдэл</h4>
                    </div>
                  <div class="card-body">
                    <div class="row">
                    @foreach($user->user_flats as $key => $vallet)
                    <div class="col-lg-3 order-lg-1 mb-5 mb-lg-0">
                        <div class="card border-info mb-3 custom_card">
                    
                          <div class="card-body">
                          <div class="text-center">
                               <h3>{{$vallet->CL_CURRENCY}}</h3>
                             </div>
                             <hr>
                            <div class="row">
                              <div class="col-md-6">
                              {{$vallet->CL_AMOUNT}}
                              </div>
                              <div class="col-md-6">
                              <b>Утга</b>
                              </div>
                              <div class="col-md-6">
                              {{$vallet->CL_DEPOSIT_WORD}}
                              </div>
                              <div class="col-md-12 text-center">
                                <hr>
                                <button class="btn btn-sm btn-info">Орлого</button>
                                  <button class="btn btn-sm btn-primary">Зарлага</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>

                    </div>
                  </div>
                </div>
              </div>
              
             
          </div>
      </section>
</div>
</div>
@endsection
    