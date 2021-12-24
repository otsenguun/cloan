@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">
<div class="section-header">

            <h1>Хэрэглэгчид</h1>
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
                                  <td>KYC зөвсөөрсөн эсэх</td>
                                  <td>
                                    @if($user->userlegit->CL_KYC_ISAPPROVED == 1)
                                        <span class="btn btn-success">Зөвшөөрсөн</span>
                                    @else
                                        <span class="btn btn-waring">Зөвшөөрөөгүй</span>
                                    @endif
                                  </td>
                                </tr>
                                <tr>
                                  <td>Шалтгаан</td>
                                  <td>{{$user->userlegit->CL_KYC_REASON}}</td>
                                </tr>
                                <tr>
                                  <td>Нэр</td>
                                  <td>{{$user->userlegit->CL_FIRST_NAME}}</td>
                                </tr>
                                <tr>
                                  <td>Овог</td>
                                  <td>{{$user->userlegit->CL_LAST_NAME}}</td>
                                </tr>
                                <tr>
                                  <td>Регистер</td>
                                  <td>{{$user->userlegit->CL_COUNTRY_REG}}</td>
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

              <div class="col-md-6 ">
                <div class="card">
                  <div class="card-header">
                      <h4>Crypto Үлдэгдэл</h4>
                  </div>
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <th>#</th>
                          <th>Short name</th>
                          <th>Cryoto</th>
                            <th>Amount</th>
                            <th>Locked</th>
                        </thead>
                        <tbody>
                          @foreach($user->user_cryptos as $key => $crypto)
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$crypto->CL_CRYPTO_SNAME}}</td>
                              <td>{{$crypto->CL_CRYPTO_NAME}}</td>
                              <td>{{$crypto->CL_AMOUNT_FULL}}</td>
                              <td>{{$crypto->CL_AMOUNT_LOCKED}}</td>
                              <td>
                                <button class="btn btn-sm btn-info inc_button" coin="{{$crypto->CL_CRYPTO_NAME}}" c_address="{{$crypto->CL_PUB_ADDRESS}}">Орлого</button>
                                <button class="btn btn-sm btn-primary inc_button">Зарлага</button>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="card">
                  <div class="card-header">
                    <h4>Валют Үлдэгдэл</h4>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                          <thead>
                            <th>#</th>
                            <th>Валют</th>
                              <th>Amount</th>
                              <th>Утга</th>
                          </thead>
                          <tbody>
                            @foreach($user->user_flats as $key => $vallet)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$vallet->CL_CURRENCY}}</td>
                                <td>{{$vallet->CL_AMOUNT}}</td>
                                <td>{{$vallet->CL_DEPOSIT_WORD}}</td>
                                <td>
                                <button class="btn btn-sm btn-info">Орлого</button>
                                <button class="btn btn-sm btn-primary">Зарлага</button>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
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
    