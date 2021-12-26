@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">

          <div class="section-header">

                      <h1>Хэрэглэгчид</h1>
                      <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Нүүр хуудас</a></div>
                        <div class="breadcrumb-item"><a href="#">Хэрэглэгчид</a></div>
                        <div class="breadcrumb-item">Жагсаалт</div>
                      </div>
                    </div>

                    <div class="section-body">
                
                      <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                          <div class="card">
                            <div class="card-header">
                              <h4>Жагсаалт</h4>
                            </div>
                            <div class="card-body">
                              <form action="{{url('users')}}" method="get">

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="">Email</label>
                                        <input name="email" type="text" class="form-control" value="{{$request->email}}">
                                      </div>
                                      <div class="col-md-4">
                                        <label for="">Mobile</label>
                                        <input name="mobile" type="text" class="form-control" value="{{$request->mobile}}">
                                      </div>
                                      <div class="col-md-2">
                                        <input name="is_kyc_approved" type="checkbox"  @if($request->is_kyc_approved == true) checked @endif>
                                        <label for="">Is Approved</label>
                                      </div>
                                      <div class="col-md-1">
                                        <input  type="submit" class="btn btn-sm btn-primary" value="Хайх">
                                      </div>
                                    </div>

                              </form>
                              <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                  <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Утас</th>
                                    <th>Хэрэглэгч</th>
                                    <th>Үүссэн огноо</th>
                                  </tr>
                                  @foreach($users->userlist->pagelist as $key => $user)
                                  <tr>
                                    <td>{{$key++}}</td>
                                    <td>{{$user->CL_EMAIL}}</td>
                                    <td>{{$user->CL_MOBILE}}</td>
                                    <td>{{$user->CL_USERNAME}}</td>
                                    <td>{{$user->CL_CREATED_DATE}}</td>
                                    <td>
                                      @if($user->legit->CL_KYC_ISAPPROVED == "true")
                                      <div class="badge badge-success">Баталгаажсан</div>
                                      @else
                                      <div class="badge badge-danger">Баталгаажаагүй</div>
                                      @endif
                                    </td>

                                    <td><a class="render" href="{{url('user',$user->id).'_1_'.$user->legit->CL_KYC_ISAPPROVED}}" class="btn btn-secondary">Харах</a></td>
                                  </tr>
                                  @endforeach
                                </table>
                              </div>
                            </div>
                            <div class="card-footer text-right">
                              <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
          </div>
        </section>
    
</div>
@endsection
