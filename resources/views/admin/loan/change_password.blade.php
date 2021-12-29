@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">

<div class="section-header">
            <h1>Нууц үг солих</h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Нууц үг солих</div>
                </div>
          </div>
<div class="section-body">

<div class="row">
         <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Нууц үг солих</h4>
            </div>
            <div class="card-body">
                @if($msj != "")
                <div class="alert alert-primary">
                    {{$msj}}
                    </div>
                @endif
                <form action="{{url('changePassword')}}" method="post" class="forme">
                <div class="form-group">
                    <label>Хуучин нууц үг</label>
                        <input type="password" class="form-control phone-number" name="password_old" step=any>
                </div>
                <div class="form-group">
                    <label>Шинэ нууц үг</label>
                        <input type="password" class="form-control phone-number" name="password_new" step=any>
                </div>
                <div class="form-group">
                    <label>Шинэ нууц үг давт</label>
                        <input type="password" class="form-control phone-number" name="password_new_repeat" step=any>
                </div>
                <div>
                    <input type="submit" class="btn btn-sm btn-primary">
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
