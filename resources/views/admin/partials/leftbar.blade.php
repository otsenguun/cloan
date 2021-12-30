@php
$user_roles = App\Helpers\AppHelper::getRole()
@endphp

<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('home')}}"> <img src="{{asset('images/coinlend_logo.png')}}" alt="" style="width:120px;"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('home')}}">CL</a>
          </div>
          <ul class="sidebar-menu">
          <li class="menu-header">Нүүр</li>
       
          
            <!-- user -->
            @if(in_array("cl-genuser",$user_roles))
            <li class="dropdown">
              <a href="{{url('/home')}}" class="nav-link"><i class="fas fa-home"></i><span>Нүүр</span></a>
            </li>

            <li class="menu-header">Үйлдэл</li>
            <li class="dropdown">
              <a href="{{url('me')}}" class="nav-link"><i class="fas fa-wallet"></i><span>Хэтэвч</span></a>
              <!-- <ul class="dropdown-menu">
                <li><a class="nav-link render" href="{{url('me')}}" urls="{{url('wallet')}}">Үлдэгдэл</a></li>
                <li><a class="nav-link" href="index.html">Хуулга</a></li>
                <li><a class="nav-link" href="index.html">Орлого/Зарлага</a></li>
              </ul> -->
            </li>
            <li class="dropdown">
              <a href="{{url('coming_soon')}}" class="nav-link" ><i class="fas fa-file-invoice-dollar"></i><span>Захиалга</span></a>
              <!-- <button class="nav-link" type="button" data-toggle="modal" data-target="#coming_soon">   </button> -->
              <!-- <ul class="dropdown-menu">
                <li><a class="nav-link render" href="{{url('me')}}" urls="{{url('wallet')}}">Үлдэгдэл</a></li>
                <li><a class="nav-link" href="index.html">Хуулга</a></li>
                <li><a class="nav-link" href="index.html">Орлого/Зарлага</a></li>
              </ul> -->
            </li>
            <!-- <li class="dropdown">
              <a href="{{url('order')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-invoice-dollar"></i> <span>Захиалга</span></a>
              <ul class="dropdown-menu">
                
                <li><a class="nav-link render" href="{{url('create_loan')}}">Зээлэх</a></li>
                <li><a class="nav-link render" href="{{url('create_loaner')}}">Зээлдүүлэх</a></li>
                <li><a class="nav-link render" href="{{url('Loanhistory')}}">Түүх</a></li>
              </ul>
            </li> -->
           @endif
           @if(in_array("cl-admin",$user_roles))
            <!-- admin -->
            <li class="dropdown">
              <a href="{{url('/dashboard2')}}" class="nav-link render"><i class="fas fa-fire"></i><span>Дашбоард</span></a>
            </li>

            <li class="menu-header">Үйлдэл</li>
            <li class="dropdown">
              <a href="{{url('/users')}}" class="nav-link render"><i class="fas fa-user"></i><span>Хэрэглэгчид</span></a>
            </li>
            <li class="dropdown">
              <a href="{{url('total_orders')}}" class="nav-link render"><i class="fas fa-file-alt"></i><span>Захиалга</span></a>
            </li>
            <li class="dropdown">
              <a href="{{url('insertRate')}}" class="nav-link render"><i class="fas fa-file-alt"></i><span>Ханш оруулах</span></a>
            </li>
            <!-- <li class="dropdown">
              <a href="{{url('/')}}" class="nav-link"><i class="fas fa-user render"></i><span>Захиалга</span></a>
            </li> -->
            <!-- operator -->
            <!-- <li class="dropdown">
              <a href="{{url('/dashboard2')}}" class="nav-link render"><i class="fas fa-fire"></i><span>Дашбоард</span></a>
            </li>

            <li class="menu-header">Үйлдэл</li>
            <li class="dropdown">
              <a href="{{url('/users')}}" class="nav-link render"><i class="fas fa-user"></i><span>Хэрэглэгчид</span></a>
            </li>
            <li class="dropdown">
              <a href="{{url('timeuploans')}}" class="nav-link render"><i class="fas fa-file-alt"></i><span>Хугцаа хэтрэлт</span></a>
            </li> -->
          </ul>
          @endif

        </aside>
      </div>