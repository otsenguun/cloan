<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Данс холбох</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('custom/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('custom/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('custom/modules/jquery-selectric/selectric.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('custom/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('custom/css/components.css')}}">
<!-- Start GA -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<style>
    .pizda{
        font-size:100px;
    }
</style>

<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Данс холбох</h4> </div>
              <div id="tabs">
                
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="last_name">Данс</label>
                      <!-- <input id="last_name" type="select" class="form-control" name="last_name">
                     -->
                     <select name="" id="" class="form-control">
                         <option value="">сонго</option>
                         <option value="">Хаан банк</option>
                         <option value="">Хас банк</option>
                         <option value="">Голомт банк</option>
                         <option value="">Төрийн банк</option>
                         <option value="">Худалдаа хөгжилийн банк</option>
                     </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="last_name">Дансны дугаар</label>
                      <input id="last_name" type="number" class="form-control" name="last_name">
                    </div>
                  </div>

               


                  <div class="form-group">
                     
                     <center>
                      <button type="submit" class="btn btn-primary ">
                      Холбох
                    </button>
                    <a href="{{url('home')}}" class="btn btn-info"> Буцах</a>
                      </center>
                     
                  </div>
                </form>
        
                </div>

              
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('custom/modules/jquery.min.js')}}"></script>
  <script src="{{asset('custom/modules/popper.js')}}"></script>
  <script src="{{asset('custom/modules/tooltip.js')}}"></script>
  <script src="{{asset('custom/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('custom/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('custom/modules/moment.min.js')}}"></script>
  <script src="{{asset('custom/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('custom/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{asset('custom/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('custom/js/page/auth-register.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('custom/js/scripts.js')}}"></script>
  <script src="{{asset('custom/js/custom.js')}}"></script>
</body>
</html>