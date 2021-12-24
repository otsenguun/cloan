@extends('admin.app')


@section('content')
  <!-- Main Content -->
<div class="main-content">

        <section class="section">
<div class="section-header">

            <h1>Админ</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Admin</div>
            </div>
          </div>
          <div class="section-body">
          
            <div class="row mt-sm-4">
              <div class="col-md-12 ">
                <div class="card profile-widget">
                
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">
                      {{$user->username}} 
                    
                    </div>
                    </div>
                </div>
              </div>

          
             
          </div>
      </section>
</div>
</div>
@endsection
    