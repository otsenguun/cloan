@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">
<div class="section-header">

            <h1>Хэтэвчний үлдэгдэл</h1>
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
                                        <span class="btn btn-danger">Зөвшөөрөөгүй</span>
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
                      <div class="col-md-2">
                        <div class="card text-white bg-primary">
                          <div class="card-header">
                          {{$crypto->CL_CRYPTO_SNAME}}
                          </div>
                          <div class="card-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>Cryoto</td>
                                  <td>{{$crypto->CL_CRYPTO_NAME}}</td>
                                </tr>
                                <tr>
                                  <td>Amount</td>
                                  <td>{{$crypto->CL_AMOUNT_FULL}}</td>
                                </tr>
                                <tr>
                                  <td>Locked name</td>
                                  <td>{{$crypto->CL_AMOUNT_LOCKED}}</td>
                                </tr>
                                <tr>
                                  <td colspan=2>
                                  <button class="btn btn-sm btn-info inc_button" coin="{{$crypto->CL_CRYPTO_NAME}}" c_address="{{$crypto->CL_PUB_ADDRESS}}">Орлого</button>
                                  <button class="btn btn-sm btn-primary inc_button">Зарлага</button>

                                  </td>
                                </tr> 
                              </tbody>
                            </table>
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
                      <div class="col-md-2">
                        <div class="card text-white bg-info">
                          <div class="card-header">
                          {{$vallet->CL_CURRENCY}}
                          </div>
                          <div class="card-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>Amount</td>
                                  <td>{{$vallet->CL_AMOUNT}}</td>
                                </tr>
                                <tr>
                                  <td>Утга</td>
                                  <td>{{$vallet->CL_DEPOSIT_WORD}}</td>
                                <tr>
                                  <td colspan=2>
                                  <button class="btn btn-sm btn-info">Орлого</button>
                                  <button class="btn btn-sm btn-primary">Зарлага</button>

                                  </td>
                                </tr> 
                              </tbody>
                            </table>
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
    