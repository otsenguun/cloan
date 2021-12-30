@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">

<div class="section-header">
            <h1>И-майл баталгаажуулах</h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">И-майл баталгаажуулах</div>
                </div>
          </div>
<div class="section-body">

<div class="row">
         <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>И-майл баталгаажуулах</h4>
            </div>
            <div class="card-body">
                
                @if($msj != "")
                <div class="alert alert-warning">
                    {{$msj}}
                    </div>
                @endif

            </div>
        </div>
        </div>
</div>

</div>
</section>
    
</div>
@endsection
