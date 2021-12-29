@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">

<div class="section-header">

            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Нийт хэрэглэгчид</h4>
                  </div>
                  <div class="card-body">
                    236
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Зээлдүүлэх дүн</h4>
                  </div>
                  <div class="card-body">
                    14,020,000
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Зээлэх дүн</h4>
                  </div>
                  <div class="card-body">
                   15,000,000
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Balance</h4>
                  </div>
                  <div class="card-body">
                    -980,000
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h4>Биелсэн захиалга</h4>
                  <div class="card-header-action">
                  
                  </div>
                </div>
                <div class="card-body">
                  <hr>
                <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Дугаар</th>
                          <th>Огноо</th>
                          <th>Төлөв</th>
                          <th>Дүн</th>
                        </tr>
                        @foreach($borrow_list->all_order_borrow as $key => $borrow)
                        <tr>
                          <td>{{ $key+1}}</td>
                          <td>{{$borrow->id}}</td>
                          <td>{{$borrow->CL_CREATED_DATE}}</td>

                          <td>
                       
                            {!! App\Helpers\AppHelper::getInfoOrder($borrow->CL_STATUS) !!}
                          </td>

                          <td>{{$borrow->CL_CRYPTO_AMOUNT}}</td>
                          <!-- <td><a href="{{url('orderBorrowCancel',$borrow->id)}}" class="btn btn-danger cancel">Цуцлах</a></td> -->
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h4>Хүлээгдэж байгаа захиалга</h4>
                  <div class="card-header-action">
                  
                  </div>
                </div>
                <div class="card-body">
                  <hr>
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Дугаар</th>
                          <th>Огноо</th>
                          <th>Төлөв</th>
                          <th>Дүн</th>
                        </tr>
                        @foreach($lend_list->all_order_lend as $key => $lend)
                        <tr>
                          <td>{{ $key+1}}</td>
                          <td>{{$lend->id}}</td>
                          <td>{{$lend->CL_CREATED_DATE}}</td>

                          <td>
                           
                            {!! App\Helpers\AppHelper::getInfoOrder($lend->CL_STATUS) !!}
                          </td>

                          <td>{{$lend->CL_TXN_AMOUNT}}</td>
                          <!-- <td><a href="{{url('orderLendCancel',$lend->id)}}" class="btn btn-danger cancel">Цуцлах</a></td> -->
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
              </div>
            </div>
           
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Нийт дижитал</h4>
                </div>
                <div class="card-body">
                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                    <div class="font-weight-bold mb-1">BTC</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" style="width:80%" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>                          
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                    <div class="font-weight-bold mb-1">SHBA</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" style="width:67%" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                    <div class="font-weight-bold mb-1">CHB</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" style="width:58%" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">884</div>
                    <div class="font-weight-bold mb-1">IHC</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" style="width:36%" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">473</div>
                    <div class="font-weight-bold mb-1">ADC</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" style="width:28%" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">418</div>
                    <div class="font-weight-bold mb-1">QWE</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" style="width:20%" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Сүүлийн 7 хоног төлөв</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Filter</a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Electronic</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> T-shirt</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Hat</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View All</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-info">
                      <h4>1,053,890₮</h4>
                      <div class="text-muted">Зээлүүд</div>
                      <div class="d-block mt-2">                              
                        <a class="render" href="{{url('total_order')}}">Бүгдийг харах</a>
                      </div>
                    </div>
                    <div class="summary-item">
                      <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                      <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                          
                          <div class="media-body">
                            <div class="media-right">0.0023</div>
                            <div class="media-title"><a href="#">BTC</a></div>
                            <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday</div>
                          </div>
                        </li>
                        <li class="media">
                         
                          <div class="media-body">
                            <div class="media-right">506</div>
                            <div class="media-title"><a href="#">ADC</a></div>
                            <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday
                            </div>
                          </div>
                        </li>
                        <li class="media">
                         
                          <div class="media-body">
                            <div class="media-right">500,00₮</div>
                            <div class="media-title"><a href="#">MNT</a></div>
                            <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
        
            </div>
          </div>
</div>

      </section>
    
</div>
@endsection
    

         