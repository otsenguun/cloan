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
            <!-- <h2 class="section-title">Hi, Ujang!</h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p> -->

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="{{asset('custom/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Захиалга</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Зээл дүн</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Зээлдүүлэх дүн</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{$user->username}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Засах</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>E-mail</td>
                                <td>{{$userdetails->CL_EMAIL}}</td>
                              </tr>
                              <tr>
                                <td>Утасны дугаар</td>
                                <td>{{$userdetails->CL_MOBILE}}</td>
                              </tr>
                              <tr>
                                <td>Нэвтрэх нэр</td>
                                <td>{{$userdetails->CL_USERNAME}}</td>
                              </tr>
                              <tr>
                                <td>Бүртгүүлсэн огноо</td>
                                <td>{{$userdetails->CL_CREATED_DATE}}</td>
                              </tr>
                              <th colspan=2>KYC</th>
                              <tr>
                                <td>KYC зөвшөөрсөн эсэх</td>
                                <td>@if($userdetails->legit->CL_IS_CONSENT_AGREED == true)
                                    <button class="btn btn-success">Баталгаажсан</button>
                                    @else
                                    <button class="btn btn-danger">Баталгаажсан</button>
                                    @endif
                                </td>
                              </tr>

                             <tr>
                                <td>РД-дугаар</td>
                                <td>{{isset($userdetails->legit->CL_COUNTRY_REG) ? $userdetails->legit->CL_COUNTRY_REG : ""}}</td>
                              </tr>
                              <tr>
                                <td>РД-дугаар</td>
                                <td>{{isset($userdetails->legit->CL_FIRST_NAME) ? $userdetails->legit->CL_FIRST_NAME : ""}}</td>
                              </tr>
                              <tr>
                                <td>РД-дугаар</td>
                                <td>{{isset($userdetails->legit->CL_LAST_NAME) ? $userdetails->legit->CL_LAST_NAME : ""}}</td>
                              </tr>
                             
                              
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <a href="{{url('users')}}" class="btn btn-info render">Буцах</a>
                      <button class="btn btn-primary">Баталгаажуулах</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
</div>

</section>
    
</div>
@endsection
