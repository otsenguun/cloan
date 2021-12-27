
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
                  <div class="profile-widget-description">
                    @foreach($user_images as $img)
                    <img src="data:image/png;base64,<?php echo base64_encode($img);?>" alt="Base 64 encoded!" style="width:100%"/>
                    @endforeach
                  </div>
                  <div class="card-footer text-center">
                 
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                      <h4>{{$userdetails->CL_USERNAME}}</h4>
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
                                <td>@if($userdetails->legit->CL_KYC_ISAPPROVED == true)
                                    <button class="btn btn-success">Баталгаажсан</button>
                                    @else
                                    <button class="btn btn-danger">Цуцлагдсан</button>
                                    @endif
                                </td>
                              </tr>

                             <tr>
                                <td>РД-дугаар</td>
                                <td>{{isset($userdetails->legit->CL_COUNTRY_REG) ? $userdetails->legit->CL_COUNTRY_REG : ""}}</td>
                              </tr>
                              <tr>
                                <td>Нэр</td>
                                <td>{{isset($userdetails->legit->CL_FIRST_NAME) ? $userdetails->legit->CL_FIRST_NAME : ""}}</td>
                              </tr>
                              <tr>
                                <td>Овог</td>
                                <td>{{isset($userdetails->legit->CL_LAST_NAME) ? $userdetails->legit->CL_LAST_NAME : ""}}</td>
                              </tr>
                             
                              
                            </tbody>
                          </table>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        @if($msj != "")
                        <div class="alert alert-primary">
                            {{$msj}}
                            </div>
                        @endif
                        <form action="{{url('approve_user')}}" method="post" class="forme">

                            <input type="hidden" name ="id" value="{{$userdetails->id}}">
                            @php 
                            $res = 1;
                            if($userdetails->legit->CL_KYC_ISAPPROVED == true){
                              $res = 0;
                            }else{
                              $res = 1;
                            }

                            @endphp
                            <input type="hidden" name ="approve" value="{{$res}}">
                            <label>Шалтгаан</label>
                                <textarea class="form-control" name="reason" id="" cols="30" rows="10"></textarea>

                            <a href="{{url('users')}}" class="btn btn-info render">Буцах</a>
                            
                            @if($userdetails->legit->CL_KYC_ISAPPROVED == false)
                            <button class="btn btn-primary">Баталгаажуулах</button>
                            @else
                            <button class="btn btn-primary">Цуцлах</button>
                            @endif
                        </form>
                     
                    </div>
                 
                </div>
              </div>
            </div>
          </div>
</div>
</section>
    
</div>
@endsection


