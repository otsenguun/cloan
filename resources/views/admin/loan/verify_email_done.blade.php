<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CoinLend</title>
        <link rel="icon" type="image/x-icon" href="{{asset('images/dan_logo.png')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />

        <style>
            body{
                font-family: 'Roboto', sans-serif !important;
            }
            h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
                font-family: 'Roboto', sans-serif !important;
            }
            .bg-gradient-primary-to-secondary{
                background: linear-gradient(45deg, #4780b8, #74b9b3) !important;
            }
            .btn-primary {
                color: #fff;
                background-color: #4781b8;
                border-color: #4781b8;
            }
            .text-gradient {
                background: -webkit-linear-gradient(#4780b8, #74b9b3);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .main_img{
                width:500px;
                z-index:1;
                transform: none;
                box-shadow: 48px 16px 48px rgb(24 37 56 / 12%);
                border-radius: 4px;
            }
            .reddot {
                text-decoration: underline;
                color:grey;
            }
        </style>
    </head>
  <!-- Main Content -->
  <body>
  <div class="container">

        <section class="section">

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
  </body>

      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('frontend/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

