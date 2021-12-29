@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">
<div class="section-header">

            <h1>Хүсэлтүүд</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Нүүр хуудас</a></div>
              <div class="breadcrumb-item"><a href="#">Захиалга</a></div>
              <div class="breadcrumb-item">Жагсаалт</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Жагсаалт</h2>

            <div class="row">
              <div class="col-6 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Зээлдүүлэх</h4>
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
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item @if($page2 == 0) active @endif"><a class="page-link" href="{{url('total_orders').'?borrow_page=1'}}">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item @if($page2 == 1) active @endif"">
                          <a class="page-link" href="{{url('total_orders').'?borrow_page=2'}}">2</a>
                        </li>
                        <li class="page-item @if($page2 == 2) active @endif""><a class="page-link" href="{{url('total_orders').'?borrow_page=3'}}">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Зээлэх</h4>
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