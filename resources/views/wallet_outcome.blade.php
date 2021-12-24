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
            <li class="nav-item">
               <a class="nav-link " href="{{url('wallet/income')}}">Орлого</a>
            </li>
            <li class="nav-item active">
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
         <label class="uk-form-label" for="select-coins">Зарлага гаргах валютаа сонгоно уу</label>
         <div class="ant-select tw-mt-10 tw-dropdown-options-select-list coin-list ant-select-single ant-select-show-arrow" style="width: 100%;">
            <div class="ant-select-selector">
               <span class="ant-select-selection-search"><input autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="rc_select_1_list" aria-autocomplete="list" aria-controls="rc_select_1_list" aria-activedescendant="rc_select_1_list_0" readonly="" unselectable="on" value="" style="opacity: 0;" id="rc_select_1"></span>
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
      <p class="uk-margin-remove tw-warning tw-mt-35 tw-mb-15"><i class="remixicon-error-warning-line tw-text-green"></i><strong>Анхааруулга:</strong> Таны баталгаажуулсан зарлагын хүсэлтийн дагуу ажлын өдрүүдэд 07:00 - 23:00 цагийн хооронд, ажлын 4 цагийн дотор таны зарлагыг шилжүүлнэ.</p>
      <p class="uk-margin-remove tw-warning">Амралтын өдрүүдэд 15:00 - 18:00 цагийн хооронд зарлагыг шилжүүлнэ.</p>
      <p class="uk-margin-remove tw-warning">Банк болон тухайн крипто валютын гүйлгээний хугацаанаас шалтгаалж тодорхой хугацааны дараа зарлага хийгдэж болзошгүйг анхаарна уу.</p>
   </div>
   <div class="uk-width-1-2@l uk-width-1-1 tw-pl-60@l tw-pt-60@l-tw tw-pt-40@m-tw uk-grid-margin uk-first-column">
      <div class="w100">
         <div class="uk-flex uk-flex-middle uk-flex-between"><label>Хадгалагдсан хаяг</label><label class="ant-checkbox-wrapper"><span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value=""><span class="ant-checkbox-inner"></span></span><span>Хаяг нэмэх</span></label></div>
         <div class="ant-select tw-mt-10 w100 tw-mb-10 ant-select-single ant-select-allow-clear ant-select-show-arrow">
            <div class="ant-select-selector"><span class="ant-select-selection-search"><input autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="rc_select_2_list" aria-autocomplete="list" aria-controls="rc_select_2_list" aria-activedescendant="rc_select_2_list_0" readonly="" unselectable="on" value="" style="opacity: 0;" id="rc_select_2"></span><span class="ant-select-selection-item" title=""></span></div>
            <span class="ant-select-arrow" unselectable="on" aria-hidden="true" style="user-select: none;">
               <span role="img" aria-label="down" class="anticon anticon-down ant-select-suffix">
                  <svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                     <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                  </svg>
               </span>
            </span>
            <span class="ant-select-clear" unselectable="on" aria-hidden="true" style="user-select: none;">
               <span role="img" aria-label="close-circle" class="anticon anticon-close-circle">
                  <svg viewBox="64 64 896 896" focusable="false" data-icon="close-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                     <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm165.4 618.2l-66-.3L512 563.4l-99.3 118.4-66.1.3c-4.4 0-8-3.5-8-8 0-1.9.7-3.7 1.9-5.2l130.1-155L340.5 359a8.32 8.32 0 01-1.9-5.2c0-4.4 3.6-8 8-8l66.1.3L512 464.6l99.3-118.4 66-.3c4.4 0 8 3.5 8 8 0 1.9-.7 3.7-1.9 5.2L553.5 514l130 155c1.2 1.5 1.9 3.3 1.9 5.2 0 4.4-3.6 8-8 8z"></path>
                  </svg>
               </span>
            </span>
         </div>
      </div>
      <div class="uk-flex uk-flex-column tw-input-large-style tw-mb-5">
         <label class="uk-form-label" for="form-stacked-text">Хаяг <span class="error-text">(Зөвхөн BTC сүлжээний хаяг оруулна)</span></label>
         <div class="uk-inline tw-responsive-input-with-clip tw-mb-5"><input class="uk-input tw-pr-50-per" type="text" placeholder="Хаяг" value=""></div>
         <label class="uk-form-label" for="form-stacked-text">Тоо хэмжээ</label>
         <div class="uk-inline tw-responsive-input-with-clip"><input type="text" inputmode="decimal" class=" " value="0.00000000"></div>
         <div class="tw-width-auto tw-text-blue-4 tw-fs-14" style="pointer-events: auto; display: flex; justify-content: flex-end;">
            Боломжит үлдэгдэл:
            <div class="tw-ml-8 tw-primary-color pointer  ">0</div>
         </div>
      </div>
      <p class="uk-margin-remove tw-fs-12 tw-mb-30">Зарлагын доод хэмжээ: <strong class="tw-text-blue-2 tw-ff-bold tw-fw-normal">0.0008 BTC</strong><span class="error-text">-с дээш дүн оруулна уу !</span></p>
      <div class="uk-child-width-1-2@s uk-child-width-1-1 uk-grid-collapse tw-border tw-border-radius-3 tw-border-color-blue-2 tw-two-box-responsive tw-mb-30 uk-grid" data-uk-grid="true">
         <div class="uk-first-column">
            <div class="tw-padding-lmedium tw-pl-35 tw-pr-35 tw-border-right tw-border-color-blue-2">
               <div class="tw-svg-fill-red uk-position-relative tw-pl-30">
                  <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" class="uk-position-top-left uk-svg" data-svg="/assets/svg/arrow-down.svg">
                     <g id="Wallet" stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g id="Wallet-Withdraw" transform="translate(-1060.000000, -714.000000)" fill-rule="nonzero">
                           <g id="Deposit" transform="translate(375.000000, 420.000000)">
                              <g id="static-infos" transform="translate(646.000000, 268.000000)">
                                 <g id="fee" transform="translate(39.000000, 26.000000)">
                                    <path d="M10,0 C15.52,0 20,4.48 20,10 C20,15.52 15.52,20 10,20 C4.48,20 0,15.52 0,10 C0,4.48 4.48,0 10,0 Z M11,10 L11,6 L9,6 L9,10 L6,10 L10,14 L14,10 L11,10 Z" id="arrow-down-circle-fill"></path>
                                 </g>
                              </g>
                           </g>
                        </g>
                     </g>
                  </svg>
                  <h5 class="tw-primary-color uk-margin-remove">Хураамжийн хэмжээ</h5>
                  <h4 class="tw-text-blue-2 uk-margin-remove tw-ff-bold">0.0005 BTC</h4>
               </div>
            </div>
         </div>
         <div>
            <div class="tw-padding-lmedium tw-pl-35 tw-pr-35">
               <div class="tw-svg-fill-green uk-position-relative tw-pl-30">
                  <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" class="uk-position-top-left uk-svg" data-svg="assets/svg/arrow-up.svg">
                     <g id="Wallet" stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g id="Wallet-Withdraw" transform="translate(-1298.000000, -714.000000)" fill-rule="nonzero">
                           <g id="Deposit" transform="translate(375.000000, 420.000000)">
                              <g id="static-infos" transform="translate(646.000000, 268.000000)">
                                 <g id="total" transform="translate(277.000000, 26.000000)">
                                    <path d="M10,0 C15.52,0 20,4.48 20,10 C20,15.52 15.52,20 10,20 C4.48,20 0,15.52 0,10 C0,4.48 4.48,0 10,0 Z M11,10 L14,10 L10,6 L6,10 L9,10 L9,14 L11,14 L11,10 Z" id="arrow-up-circle-fill"></path>
                                 </g>
                              </g>
                           </g>
                        </g>
                     </g>
                  </svg>
                  <h5 class="tw-primary-color uk-margin-remove">Таны авах дүн</h5>
                  <h4 class="tw-text-blue-2 uk-margin-remove tw-ff-bold">0 BTC</h4>
               </div>
            </div>
         </div>
      </div>
      <button class="uk-width-1-1 uk-button uk-button-default tw-button tw-box-shadow-green uk-button-primary tw-mt-30 tw-medium-button">Зарлага гаргах</button>
   </div>
</div>

         </div>
  
      </div>
   </div>
</x-app-layout>