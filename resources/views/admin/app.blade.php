<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>CoinLend</title>
  <link rel="icon" type="image/x-icon" href="{{asset('images/dan_logo.png')}}" />
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('custom/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('custom/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('custom/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('custom/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('custom/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('custom/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

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
  a.active{
    border: solid 1px;
  }
  .hidden{
    display:none;
  }
</style>

  <!-- General JS Scripts -->
  <script src="{{asset('custom/modules/jquery.min.js')}}"></script>
  <script src="{{asset('custom/modules/popper.js')}}"></script>
  <script src="{{asset('custom/modules/tooltip.js')}}"></script>
  <script src="{{asset('custom/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('custom/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('custom/modules/moment.min.js')}}"></script>
  <script src="{{asset('custom/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('custom/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('custom/modules/chart.min.js')}}"></script>
  <script src="{{asset('custom/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('custom/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('custom/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('custom/js/page/index.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('custom/js/scripts.js')}}"></script>
  <script src="{{asset('custom/js/custom.js')}}"></script>



<!-- /END GA --></head>

<body>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('admin.partials.header')
        @include('admin.partials.leftbar')

        @yield('content')

        @include('admin.partials.footer')
    

    
    </div>
  </div>

  <div class="modal" tabindex="-1" role="coin_re_fill" id="coin_re_fill">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title coin_inc_header" ></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input class="form-control" id="coin_address" type="text" disabled></input>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary copy_button" onclick="myFunction()">Хуулах</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" tabindex="-1" role="coin_re_fill" id="confirm_form">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title confirm_header" ></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <div class="show"></div>
          <!-- <div> <a href="/" class="btn btn-primary" target="blank">PDF</a> </div> -->
        </div>
        <div class="modal-footer">
          <a href="#" id="borrowconfirm" type="button" class="btn btn-primary">Баталгаажуулах</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
        </div>
      </div>
    </div>
  </div>




  <!-- <script src="{{asset('custom/js/my.js')}}"></script> -->

  <script>
      $(document).on("click",".inc_button",function(e) {
        let coin = $(this).attr("coin");
        let c_address = $(this).attr("c_address");
          $("#coin_address").val(c_address);
          $(".coin_inc_header").html(coin);
          $('#coin_re_fill').modal('show'); 

      });

    

      function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("coin_address");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        alert("Copied the address: " + copyText.value);
      }

      $("#checkBorrow").click(function(e){
            // e.preventDefault();
            let form = $(".check_form");
            let body = form.serialize();
            // let method = $(this).attr("href");
            // console.log(body);
            let url = form.attr("action");
            let method = form.attr("method");
            // console.log(method);
            $.ajax({
                url: url,
                method:method,
                data:body,
                context: document.body
                }).done(function(response) {

                    // console.log(response);
                    
                    let result = JSON.parse(response);

                    if(result.success == true){
                    $("#borrowconfirm").removeClass("hidden");
                    $("#borrowcancel").removeClass("hidden");


                    $("#calculate_price").html(result.order_borrow.CL_FLAT_AMOUNT + " " + result.order_borrow.CL_FLAT_CURRENCY);
                    $("#calculate_price_refund").html(result.order_borrow.CL_FLAT_EXPECTED_RETURN_AMOUNT + " " + result.order_borrow.CL_FLAT_CURRENCY);
                    $("#calculate_precent").html(  result.order_borrow.CL_BORROW_INTEREST_RATE+ " %");
                    $("#calculate_crypto").html(result.order_borrow.CL_CRYPTO_AMOUNT + " " + result.order_borrow.CL_CRYPTO_SNAME);
                    $("#borrowconfirm").attr("href","{{url('orderBorrowConfirm')}}" + "/" + result.order_borrow.id);
                    $("#borrowcancel").attr("href","{{url('orderBorrowCancel')}}" + "/" + result.order_borrow.id);
                    let clone_div = $(".result_div");
                    $(".confirm_header").html("Зээлэх хүсэлт");
                    $(".show").html($(clone_div).html());

                    $('#confirm_form').modal('show');
                    }else{
                      alert(result.msg);
                      $("#borrowconfirm").addClass("hidden");
                      $("#borrowcancel").addClass("hidden");

                    }

            }).fail(function(data, textStatus, xhr) {

                    window.location.replace("{{url('/me')}}");
                    
            });
        });
       
          $( "#checkLend" ).click(function() {
            // e.preventDefault();
            let form = $(".calculateLoaner");
            let body = form.serialize();
            // let method = $(this).attr("href");
            // console.log(body);
            let url = form.attr("action");
            let method = form.attr("method");
            // console.log(method);
            $.ajax({
                url: url,
                method:method,
                data:body,
                context: document.body
                }).done(function(response) {

                    // console.log(response);
                    
                    let result = JSON.parse(response);
                    // console.log(result);

                    if(result.success == true){
                    $("#borrowconfirm").removeClass("hidden");
                    $("#borrowcancel").removeClass("hidden");

                      
                    $("#calculate_price").html(result.order_lend.CL_TXN_AMOUNT + " " + result.order_lend.CL_CURRENCY);
                    $("#calculate_precent").html("3%");
                    $("#borrowconfirm").attr("href","{{url('orderLendConfirm')}}" + "/" + result.order_lend.id);
                    $("#borrowcancel").attr("href","{{url('orderLendCancel')}}" + "/" + result.order_lend.id);
                    
                    let clone_div = $(".result_div");
                    $(".confirm_header").html("Зээлдүүлэх хүсэлт");
                    $(".show").html($(clone_div).html());

                    $('#confirm_form').modal('show');
                    }else{
                      alert(result.msg);
                      $("#borrowconfirm").addClass("hidden");
                      $("#borrowcancel").addClass("hidden");

                    }

            }).fail(function(data, textStatus, xhr) {

            
                    window.location.replace("{{url('/me')}}");
                    
            });
        });

        // $(".cancel").click(function(){
        //   e.preventDefault();

        // });
        function formatPera(num) {
            var p = parseFloat(num).toFixed(2).split(".");
            return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                return  num + (i && !(i % 3) ? "," : "") + acc;
            }, "") + "." + p[1];
        }

        // $("input[sync='number']").keyup(function(){
        //   // $(this).val(addCommas( $(this).val()));
        //   // let num = formatPera($(this).val());
        //   // console.log(num);
        //   // $(this).val(num);
        // });

      
      // $(document).on("click",".render",function(e) {
      //   e.preventDefault();
      //   let url = $(this).attr("href");
      //   let anchor = $(this);
      //   console.log(url);

      //   $.ajax({
      //       url: url,
      //       context: document.body
      //       }).done(function(rendered_html) {
      //           // console.log("renders");
      //           $(".render").removeClass("active");
      //           anchor.addClass("active");
      //           $(".section").html(rendered_html);
                
      //     }).fail(function(data, textStatus, xhr) {
      //           //This shows status code eg. 403
      //           // console.log("error", data.status);
      //           if(data.status == 401){
      //             window.location.replace("{{url('/me')}}");
      //           }
                
      //     });
       

      // });
      // $(document).on("submit",".forme",function(e) {
      //   e.preventDefault();
        
      //   // let anchor = $(this);
      //   let body = $( this ).serialize();
      //   // let method = $(this).attr("href");
      //   // console.log(body);
      //   let url = $(this).attr("action");
      //   let method = $(this).attr("method");
      //   // console.log(method);
      //   $.ajax({
      //       url: url,
      //       method:method,
      //       data:body,
      //       context: document.body
      //       }).done(function(rendered_html) {
      //           // console.log("renders");
      //           $(".render").removeClass("active");
      //           // anchor.addClass("active");
      //           $(".section").html(rendered_html);
                
      //     }).fail(function(data, textStatus, xhr) {

      //           if(data.status == 401){
      //             window.location.replace("{{url('/me')}}");
      //           }
                
      //     });
       

      // });
      
      // $(document).ready(){
      //   $("a[href='{{url('dashboard2')}}']").click();
      // }

  </script>
</body>
</html>