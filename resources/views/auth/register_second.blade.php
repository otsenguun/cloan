<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>CoinLend</title>

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
    .def{
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
              <div class="card-header"><h4>Миний тухай</h4> 
              <!-- <a class="btn btn-info" href="{{url('user_details_org')}}" > Байгууллага</a> -->
            </div>
              <div id="tabs">
                
              <div class="card-body">
             
                @if (\Session::has('failed'))
                <div class="alert alert-success">
                        <ul>
                        <li>{!! \Session::get('failed') !!}</li>
                        </ul>
                </div>
                @endif
                <form method="POST" action="{{url('/user_details_update')}}" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="frist_name">Овог</label>
                      <input id="frist_name" type="text" class="form-control" name="firstname" autofocus value= "{{isset($response->userlegit->CL_FIRST_NAME) ? $response->userlegit->CL_FIRST_NAME : '' }}" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="last_name">Нэр</label>
                      <input id="last_name" type="text" class="form-control" name="lastname" value= "{{isset($response->userlegit->CL_LAST_NAME) ? $response->userlegit->CL_LAST_NAME : '' }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="text">Регистер/Д</label>
                    <input id="text" type="text" class="form-control" name="country_reg_id" value= "{{isset($response->userlegit->CL_COUNTRY_REG) ? $response->userlegit->CL_COUNTRY_REG : '' }}" >
                    <div class="invalid-feedback">
                    </div>
                  </div>


                  <div class="row">
                    
                    <div class="form-group col-md-4">
                       
                         <center>
                         <label>Иргэний үнэмлэх / урд тал</label>
                         <br>
                         @if(isset($user_images["f_img"]))
                          <img src="data:image/png;base64,<?php echo base64_encode($user_images["f_img"]);?>" alt="Base 64 encoded!" style="width:100%"/>
                          @else
                          <i class="fas fa-id-card def text-center"></i>
                         @endif
                       
                       </center>
                           
                        
                     
                      <input type="file" class="form-control" name="reg_1">
                    </div>
                    <div class="form-group col-md-4">

                          <center>
                          <label>Иргэний үнэмлэх / ард тал</label>
                                <br>
                                @if(isset($user_images["b_img"]))
                                  <img src="data:image/png;base64,<?php echo base64_encode($user_images["b_img"]);?>" alt="Base 64 encoded!" style="width:100%"/>
                                  @else
                                  <i class="fas fa-credit-card def"></i>
                                @endif
                          </center>
                           
                     
                      <input type="file" class="form-control" name="reg_2">
                    </div>
                    <div class="form-group col-md-4">
                          <center>
                          <label>Үнэмлэхээ барьсан зураг</label>
                          @if(isset($user_images["s_img"]))
                            <img src="data:image/png;base64,<?php echo base64_encode($user_images["s_img"]);?>" alt="Base 64 encoded!" style="width:100%"/>
                            @else
                            <i class="fas fa-portrait def"></i>
                          @endif
                          </center>
                    <!-- <i class="fas fa-portrait"></i> -->
                    
                     <input type="file" class="form-control" name="reg_3">
                    </div>

                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                     
                      <input type="checkbox" name="is_consent_agreed" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">Үйлчилгээний нөхцөл зөвшөөрөх</label>
                      <button class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModalLong"> Унших</button>
                    </div>
                  </div>

                  <div class="form-group">
                      <center>
                      <button type="submit" class="btn btn-primary ">
                      Хадгалах
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

  <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> COINLEND.MN-ИЙН ҮЙЛЧИЛГЭЭНИЙ НӨХЦӨЛ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <span>
        &nbsp;Үйлчилгээний нөхцөл нь coinlend.mn виртуал хөрөнгийн үйлчилгээ үзүүлэхгүй холбоотой бүх талын харилцааг зохицуулна. Харилцагч үйлчилгээний нөхцөлтэй танилцаж зөвшөөрснөөр үйлчилгээтэй холбоотой холбоотой харилцаанд оролцох эрх
        үүрэг, хариуцлагыг хүлээхээр талууд тохиролцсонд тооцогдоно.
    </span>
    <br />
    <span>НЭГ:ЕРӨНХИЙ НӨХЦӨЛ&nbsp;</span><br />
    <span>
        1.1 &nbsp; Энэхүү үйлчилгээний нөхцөлийг нэг талаас Зээлдэгч, Зээлдүүлэгч хамтад нь &ldquo;Харилцагч&rdquo; нөгөө талаас виртуал хөрөнгийн үйлчилгээ үзүүлэгч цаашид &ldquo;Койнлэнд ХХК&rdquo; гэнэ. Хамтад нь талууд гэж
        нэрлэнэ.Талуудын харилцааг энэхүү үйлчилгээний нөхцөлөөр зохицуулна.
    </span>
    <span>1.2 &nbsp; Coinlend.mn нь Peer 2 Peer буюу харилцагч хооронд дундын зуучлалгүйгээр хоорондоо зээл өгөх, авах процессыг олгосон цахим платформ юм.&nbsp;</span>
    <span>1.3 &nbsp; Зээлдэгч гэж &ldquo;Койнлэнд ХХК&rdquo; апплакейшнд бүртгүүлж баталгаажсан зээлдэгчээр бүртгүүлсэн иргэн, хуулийн этгээдийг хэлнэ.&nbsp;</span>
    <span>1.4 &nbsp; Зээлдүүлэгч гэж &ldquo;Койнлэнд ХХК&rdquo; апплакейшнд бүртгүүлж баталгаажсан зээлдүүлэгчээр бүртгүүлсэн иргэн, хуулийн этгээдийг хэлнэ.&nbsp;</span>
    <span>ХОЁР: ХАРИЛЦАГЧДЫН ЭРХ ҮҮРЭГ</span>
    <span>1.1 &nbsp; Харилцагч нь энэхүү үйлчилгээний нөхцөлийг хатуу баримтлах бөгөөд энэхүү үйлчилгээний нөхцөлийг хүлээн зөвшөөрсөн тохиолдолд coinlend.mn апплакейшний үйлчилгээг авах эрхтэй болно.</span>
    <span>1.2 &nbsp; Харилцагч нь хувийн мэдээлэл &ldquo;Койнлэнд&rdquo; ХХК-ийг дагуу мэдээлж бүртгэл баталгаажсан үед үйлчилгээ авах боломжтой болно.</span>
    <span>1.3 &nbsp; Харилцагч нь аливаа хууль бус үйл ажиллагаа хийхгүй бөгөөд үйлдэл болгон нь бүртгэгдэж байна.</span>
    <span>1.4 &nbsp; Харилцагч энэхүү гэрээний 4.1 заасан шимтгэл төлөх үүрэгтэй.</span>
    <span>1.5 &nbsp; Харилцагч энэхүү гэрээний 4.2 заасан хүүг төлөх үүрэгтэй хэрэв хүүг төлөхөөс таталцвал барьцаа хөрөнгө болох виртуал хөрөнгийг хурааж зээлдэгчийг хохиролгүй болгоно.</span><br />
    <span>ГУРАВ: ВИРТУАЛ ҮЙЛЧИЛГЭЭ ҮЗҮҮЛЭГЧИЙН ЭРХ ҮҮРЭГ</span><br />
    <span>3.1 &ldquo;Койнлэнд&rdquo; ХХК нь харилцагчдад найдвартай тогтвортой виртуал хөрөнгийг барьцаалах боломжийг олгоно.&nbsp;</span><br />
    <span>3.2 &ldquo;Койнлэнд &ldquo;ХХК нь харилцагчдын виртуал хөрөнгийг хадгалах, зарцуулахад нь зөвлөгөө өгөх үүрэгтэй.</span><br />
    <span>3.3 &ldquo;Койнлэнд&rdquo; ХХК нь харилцагчид санхүүгийн үйлчилгээнээс учрах эрсдэлийг анхааруулсан байна.</span><br />
    <span>ДӨРӨВ: ҮЙЛЧИЛГЭЭ ҮЗҮҮЛЭГЧИЙН ШИМТГЭЛ, ТӨЛБӨР ТООЦОО</span><br />
    <span>4.1 &nbsp; Харилцагч нь &ldquo;Койнлэнд&rdquo; ХХК-д орлого хийхэд ямар нэгэн шимтгэл байхгүй бөгөөд зарлага болгонд 1%-ийн шимтгэл төлнө.</span>
    <span>4.2 &nbsp; Зээлдэгч нь мөнгөн хөрөнгө зээлж авсны төлөө хүү төлөх бөгөөд хүүг &ldquo;Койнлэнд&rdquo; ХХК тогтооно.</span>
    <span>4.3 &nbsp; Зээлдэгч нь мөнгөн хөрөнгийг тодорхой хугацаатай зээлэх бөгөөд зээлийн хугацаа хэтэрсэн тохиолдолд барьцаа хөрөнгө болох в</span>
    <span>4.4 &nbsp; Харилцагч нь мөнгөн хөрөнгөөр зээлдэгчид зээл өгөх ба зээлийн хүүний 80%-ийг зээлдүүлэгч өөрөө авна.</span><br />
    <span>ТАВ:ХАРИУЦЛАГА</span><br />
    <span>5.1 Талууд энэхүү гэрээний нөхцөлийг зөрчвөл хариуцлага хүлээнэ.</span><br />
    <span>ЗУРГАА: МАРГААН ШИЙДВЭРЛЭХ</span><br />
    <span>
        6.1 Аливаа үл ойлголцол гарсан тохиолдолд эхлээд &ldquo;Койнлэнд&rdquo;ХХК-д хандана уу. &ldquo;Койнлэнд&rdquo;ХХК таны асуудлыг 30 хоногийн дотор судалж, зохих хариу өгнө. &ldquo;Койнлэнд&rdquo;ХХК-аас Таны асуудлыг судлаад өгсөн
        хариу болон авсан арга хэмжээнд Та сэтгэл хангалуун бус байгаа тохиолдолд Монгол Улсын Олон Улсын Арбитрт хандаж маргааныг шийдвэрлүүлэх боломжтой. Таны болон &ldquo;Койнлэнд&rdquo;ХХК-аас ирүүлсэн, харилцан солилцсон и-мэйл болон
        цахим мэдэгдлүүдийг маргааныг шийдвэрлэх нотлох баримт гэж үзнэ.
    </span>
    <br />
    <span>ДОЛОО. НЭР ТОМЬЁО</span><br />
    <span>Зээлийн шимтгэл: Зээлдэгч зээлдүүлэгчид төлөх шимтгэл энэхүү шимтгэлийг coinlend.mn платформ тогтооно.</span><br />
    <span>Зээлийн хугацаа: coinlend.mn платформын зүгээс санал болгосон зээлийн төлбөрийн эргэн төлөлтийн эцсийн хугацааг хэлнэ.</span><br />
    <span>Барьцаа хөрөнгө: Энэ нь зээлдэгч зээл авах зорилгоор зээлдүүлэгчид барьцаалсан виртуал хөрөнгийг хэлнэ.</span><br />
    <span>Барьцаа хөрөнгө татан буулгах: Зээлдэгч зээлийн төлбөрөө хугацаанд нь төлөөгүй эсвэл LTV төвшин очсон тохиолдолд барьцаа хөрөнгийг татан буулгаж зээлдүүлэгчид шилжүүлнэ.</span><br />
    <span>LTV: Зээлдэгч барьцаа хөрөнгө болох виртуал хөрөнгийн хэдэн хувиар зээл авах тухай.</span><br />
    <span>&nbsp;</span><br />
    <span>Койнлэнд ХХК-ийн харилцагч миний бие доорх үйлчилгээний нөхцөлийг хүлээн зөвшөөрч байна.&nbsp;</span>
    <br>
    <p class="text-center"><br> <button type="button" class="btn btn-primary" data-dismiss="modal" id="is_confirm">Зөвшөөрөх</button></p>
    
</div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
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
  <script>
      $( "#is_confirm" ).click(function() {
      console.log("sdasd");
      $("#agree").attr("checked","checked");
    });
  </script>
</body>
</html>