<style>
   .active{
      color:green;
   }
   .tw-primary-color{
      display:none;
   }
   .table{
      margin: 20px 20px 20px 50px;
   }
</style>

<x-app-layout>
   <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
         <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <h4>Хэтэвч</h4>
         </div>
         <ul class="nav justify-content-center">
            <li class="nav-item">
               <a class="nav-link " aria-current="page" href="{{url('wallet')}}">Үлдэгдэл</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link active" href="{{url('wallet/income')}}">Орлого</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('wallet/outcome')}}">Зарлага</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('wallet/history')}}">Түүх</a>
            </li>
         </ul>

         <div class="row">
            
         <div style="margin:20px 20px 20px 20px" data-uk-grid="true">
   <div class="uk-width-1-2@l uk-width-1-1 tw-border-right@l tw-border-bottom@l-tw tw-border-color-blue-2 tw-pr-60@l tw-pb-60@l-tw tw-pb-40@m-tw uk-first-column">
      <div class="tw-input style-2 tw-dropdown-select">
         <label class="uk-form-label" for="select-coins">Орлого оруулах валютаа сонгоно уу</label>
         <div class="ant-select tw-mt-10 tw-dropdown-options-select-list coin-list ant-select-single ant-select-show-arrow" style="width: 100%;">
            <div class="ant-select-selector">
               <span class="ant-select-selection-search"><input autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="rc_select_0_list" aria-autocomplete="list" aria-controls="rc_select_0_list" aria-activedescendant="rc_select_0_list_8" readonly="" unselectable="on" value="" style="opacity: 0;" id="rc_select_0" aria-expanded="false"></span>
               <span class="ant-select-selection-item">
                  <div class="coin-coin-list">
                     <div><img src="https://trade.mn/coin-icons/btc.svg" class="uk-margin-small-right" width="22px" height="22px" alt=""></div>
                     BTC
                  </div>
               </span>
            </div>
            <span class="ant-select-arrow" unselectable="on" aria-hidden="true" style="user-select: none;">
               <span role="img" aria-label="down" class="anticon anticon-down ant-select-suffix">
                  <svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                     <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                  </svg>
               </span>
            </span>
         </div>
      </div>
      <div class="tw-conditional-title uk-flex uk-flex-left uk-flex-row tw-mt-30 tw-flex-column@xxs">
         <div class="tw-conditional-title-right style-3 uk-flex uk-flex-column tw-wallet-balance">
            <i class="remixicon-wallet-2-line tw-fs-22"></i><span>Нийт үлдэгдэл</span>
            <h5>
               <span class="tw-wallet-balance-coin">0.00000000 </span>
               <div class="currencyBalance">BTC</div>
            </h5>
         </div>
         <div class="tw-conditional-title-right style-3 uk-flex uk-flex-column tw-wallet-balance">
            <span>Захиалгад байгаа</span>
            <h5>
               <span class="tw-wallet-balance-coin">0.00000000 </span>
               <div class="currencyBalance">BTC</div>
            </h5>
         </div>
         <div class="tw-conditional-title-right style-3 uk-flex uk-flex-column tw-wallet-balance">
            <span>Боломжит үлдэгдэл</span>
            <h5>
               <span class="tw-wallet-balance-coin">0.00000000 </span>
               <div class="currencyBalance">BTC</div>
            </h5>
         </div>
      </div>
      <p class="uk-margin-remove tw-warning tw-mt-35 tw-mb-10"><i class="remixicon-error-warning-line tw-text-green"></i><strong style="color: red;">Анхааруулга: </strong> Bitcoin орлого сүлжээний 3 блок баталгаажуулалт үүссэн үед таны хэтэвч автоматаар цэнэглэгдэнэ.</p>
   </div>
   <div class="uk-width-1-2@l uk-width-1-1 tw-pl-60@l tw-pt-60@l-tw tw-pt-40@m-tw uk-grid-margin uk-first-column" id="addressContainer">
      <p style="padding: 10px; border: 1px solid red; font-size: 15px;">Буруу сүлжээгээр эсвэл хаягаа буруу шилжүүлсэн гүйлгээг CoinLend.mn хариуцахгүй тул та доорх анхааруулга хэсэгтэй сайтар танилцана уу!</p>
      <div class="tw-input style-2"><label class="uk-form-label" for="tw-balance"><span id="currencyDeposit">Орлого хийх хаяг </span></label></div>
      <h3 class="uk-margin-remove tw-fs-18 tw-text-blue-2 tw-mt-10" id="cryptoAddress" style="word-break: break-all;">39XWfQxdnWSFWsLcyKWniFkwMXiJxFMiJa</h3>
      <div uk-margin="">
         <p class="uk-button uk-button-default tw-button tw-box-shadow copy-address uk-first-column"><i class="remixicon-file-copy-2-line"></i>Хаягийг хуулах</p>
         <p class="uk-button uk-button-default tw-button tw-box-shadow"><i class="remixicon-qr-code-line"></i>QR код харах</p>
      </div>
      <div class="uk-margin-remove tw-warning tw-mt-35"><i class="remixicon-error-warning-line tw-text-green"></i><strong>Анхааруулга:</strong>&nbsp;<span id="depositInfoTxt2">Bitcoin (BTC) орлого шилжүүлэхэд
         <br> -Зөвхөн (BTC) сүлжээгээр шилжүүлэг хүлээн авна.
         <br> -Крипто хаягаа буруу шилжүүлбэл хүлээж авахгүй.</span>
      </div>
   </div>
</div>

         </div>
  
      </div>
   </div>
</x-app-layout>