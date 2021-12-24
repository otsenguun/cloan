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
               <a class="nav-link active" aria-current="page" href="{{url('wallet')}}">Үлдэгдэл</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('wallet/income')}}">Орлого</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('wallet/outcome')}}">Зарлага</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('wallet/history')}}">Түүх</a>
            </li>
         </ul>

         <div class="row">
            <div class="table-responsive">

   <table class="table">
   <thead>
      <tr>
         <th>Валют<img alt="" class="tw-ml-5 tw-cursor-pointer tw-text-blue-3" src="/assets/svg/sort.svg" data-uk-svg="true"></th>
         <th class="uk-visible@s">Нэр<img alt="" class="tw-ml-5 tw-cursor-pointer tw-text-blue-3" src="/assets/svg/sort.svg" data-uk-svg="true"></th>
         <th>Үлдэгдэл<img alt="" class="tw-ml-5 tw-cursor-pointer tw-text-blue-3" src="/assets/svg/sort.svg" data-uk-svg="true"></th>
         <th>Захиалгад байгаа<img alt="" class="tw-ml-5 tw-cursor-pointer tw-text-blue-3" src="/assets/svg/sort.svg" data-uk-svg="true"></th>
         <th>Үйлдэл</th>
      </tr>
   </thead>
   <tbody class="uk-background-default">
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/mnt.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">MNT</h6>
            </div>
         </td>
         <td class="uk-visible@s">Төгрөг</td>
         <td>9,823.00</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/BTC/MNT">BTC/MNT</a></li>
                     <li><a href="/exchange/ETH/MNT">ETH/MNT</a></li>
                     <li><a href="/exchange/DASH/MNT">DASH/MNT</a></li>
                     <li><a href="/exchange/LTC/MNT">LTC/MNT</a></li>
                     <li><a href="/exchange/CND/MNT">CND/MNT</a></li>
                     <li><a href="/exchange/EOS/MNT">EOS/MNT</a></li>
                     <li><a href="/exchange/TRX/MNT">TRX/MNT</a></li>
                     <li><a href="/exchange/ICX/MNT">ICX/MNT</a></li>
                     <li><a href="/exchange/XRP/MNT">XRP/MNT</a></li>
                     <li><a href="/exchange/VEN/MNT">VEN/MNT</a></li>
                     <li><a href="/exchange/REQ/MNT">REQ/MNT</a></li>
                     <li><a href="/exchange/OMG/MNT">OMG/MNT</a></li>
                     <li><a href="/exchange/ARDX/MNT">ARDX/MNT</a></li>
                     <li><a href="/exchange/BAT/MNT">BAT/MNT</a></li>
                     <li><a href="/exchange/USDT/MNT">USDT/MNT</a></li>
                     <li><a href="/exchange/ICTG/MNT">ICTG/MNT</a></li>
                     <li><a href="/exchange/BNB/MNT">BNB/MNT</a></li>
                     <li><a href="/exchange/UNI/MNT">UNI/MNT</a></li>
                     <li><a href="/exchange/MATIC/MNT">MATIC/MNT</a></li>
                     <li><a href="/exchange/TRD/MNT">TRD/MNT</a></li>
                     <li><a href="/exchange/DOT/MNT">DOT/MNT</a></li>
                     <li><a href="/exchange/CAKE/MNT">CAKE/MNT</a></li>
                     <li><a href="/exchange/KOK/MNT">KOK/MNT</a></li>
                     <li><a href="/exchange/TEST/MNT">TEST/MNT</a></li>
                     <li><a href="/exchange/IHC/MNT">IHC/MNT</a></li>
                     <li><a href="/exchange/ITOK/MNT">ITOK/MNT</a></li>
                     <li><a href="/exchange/ZESC/MNT">ZESC/MNT</a></li>
                     <li><a href="/exchange/OBOT/MNT">OBOT/MNT</a></li>
                     <li><a href="/exchange/SPC/MNT">SPC/MNT</a></li>
                     <li><a href="/exchange/MONT/MNT">MONT/MNT</a></li>
                     <li><a href="/exchange/SOL/MNT">SOL/MNT</a></li>
                     <li><a href="/exchange/SHIB/MNT">SHIB/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/usd.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">USD</h6>
            </div>
         </td>
         <td class="uk-visible@s">Америк доллар</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="tw-primary-color" style="opacity: 0;"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav"></ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/btc.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">BTC</h6>
            </div>
         </td>
         <td class="uk-visible@s">Bitcoin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/BTC/MNT">BTC/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/eth.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">ETH</h6>
            </div>
         </td>
         <td class="uk-visible@s">Ethereum</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/ETH/MNT">ETH/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/dash.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">DASH</h6>
            </div>
         </td>
         <td class="uk-visible@s">Dash</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="tw-primary-color" style="opacity: 0;"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/DASH/MNT">DASH/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/ltc.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">LTC</h6>
            </div>
         </td>
         <td class="uk-visible@s">Litecoin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/LTC/MNT">LTC/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/xrp.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">XRP</h6>
            </div>
         </td>
         <td class="uk-visible@s">Ripple</td>
         <td>0.00000001</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/XRP/MNT">XRP/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/cnd.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">CND</h6>
            </div>
         </td>
         <td class="uk-visible@s">Cindicator</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/CND/MNT">CND/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/eos.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">EOS</h6>
            </div>
         </td>
         <td class="uk-visible@s">EOS</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="tw-primary-color" style="opacity: 0;"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/EOS/MNT">EOS/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/trx.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">TRX</h6>
            </div>
         </td>
         <td class="uk-visible@s">Tron</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="tw-primary-color" style="opacity: 0;"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/TRX/MNT">TRX/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/icx.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">ICX</h6>
            </div>
         </td>
         <td class="uk-visible@s">ICON</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="tw-primary-color" style="opacity: 0;"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/ICX/MNT">ICX/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/ven.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">VEN</h6>
            </div>
         </td>
         <td class="uk-visible@s">VeChain</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="tw-primary-color" style="opacity: 0;"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/VEN/MNT">VEN/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/req.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">REQ</h6>
            </div>
         </td>
         <td class="uk-visible@s">Request</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/REQ/MNT">REQ/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/omg.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">OMG</h6>
            </div>
         </td>
         <td class="uk-visible@s">OMG Network</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/OMG/MNT">OMG/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/ardx.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">ARDX</h6>
            </div>
         </td>
         <td class="uk-visible@s">ArdCoin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/ARDX/MNT">ARDX/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/bat.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">BAT</h6>
            </div>
         </td>
         <td class="uk-visible@s">Basic Attention Token</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/BAT/MNT">BAT/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/usdt.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">USDT</h6>
            </div>
         </td>
         <td class="uk-visible@s">Tether</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/USDT/MNT">USDT/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/ictg.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">ICTG</h6>
            </div>
         </td>
         <td class="uk-visible@s">ICTG Security Token</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/ICTG/MNT">ICTG/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/bnb.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">BNB</h6>
            </div>
         </td>
         <td class="uk-visible@s">Binance Coin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/BNB/MNT">BNB/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/trd.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">TRD</h6>
            </div>
         </td>
         <td class="uk-visible@s">Digital Exchange Coin</td>
         <td>17.72954702</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/TRD/MNT">TRD/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/uni.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">UNI</h6>
            </div>
         </td>
         <td class="uk-visible@s">Uniswap</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/UNI/MNT">UNI/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/matic.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">MATIC</h6>
            </div>
         </td>
         <td class="uk-visible@s">Polygon</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/MATIC/MNT">MATIC/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/kok.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">KOK</h6>
            </div>
         </td>
         <td class="uk-visible@s">KOK Coin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/KOK/MNT">KOK/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/dot.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">DOT</h6>
            </div>
         </td>
         <td class="uk-visible@s">Polkadot</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/DOT/MNT">DOT/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/cake.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">CAKE</h6>
            </div>
         </td>
         <td class="uk-visible@s">PancakeSwap</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/CAKE/MNT">CAKE/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/ihc.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">IHC</h6>
            </div>
         </td>
         <td class="uk-visible@s">Inflation Hedging Coin</td>
         <td>1,575.84200000</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/IHC/MNT">IHC/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/zesc.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">ZESC</h6>
            </div>
         </td>
         <td class="uk-visible@s">ZesCoin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/ZESC/MNT">ZESC/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/spc.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">SPC</h6>
            </div>
         </td>
         <td class="uk-visible@s">Storepay Coin</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/SPC/MNT">SPC/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/obot.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">OBOT</h6>
            </div>
         </td>
         <td class="uk-visible@s">Obortech</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/OBOT/MNT">OBOT/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/mont.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">MONT</h6>
            </div>
         </td>
         <td class="uk-visible@s">Mongol Tether</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/MONT/MNT">MONT/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/sol.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">SOL</h6>
            </div>
         </td>
         <td class="uk-visible@s">Solana</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/SOL/MNT">SOL/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row uk-heigh-1-1">
               <img alt="" class="uk-preserve uk-margin-small-right" src="https://trade.mn/coin-icons/shib.svg" height="22px" width="22px">
               <h6 class="uk-margin-remove tw-mt-2 uk-text-uppercase tw-text-medium tw-ff-bold">SHIB</h6>
            </div>
         </td>
         <td class="uk-visible@s">Shiba Inu</td>
         <td>0</td>
         <td>0</td>
         <td>
            <div class="uk-flex uk-flex-middle uk-flex-row tw-table-functions tw-primary-color">
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-up-fill tw-text-green tw-mr-8 tw-fs-16"></i>Орлого</div>
               </div>
               <div class="uk-flex uk-flex-center">
                  <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
               </div>
               <div class="uk-flex uk-flex-middle uk-flex-center tw-cursor-pointer" aria-expanded="false"><img alt="" class="tw-mr-8 uk-preserve" src="/assets/svg/exchange.svg">Арилжаа<i class="remixicon-arrow-drop-down-fill tw-fs-28 tw-text-blue-3"></i></div>
               <div class="tw-balance-dropdown uk-dropdown" uk-dropdown="true">
                  <ul class="uk-nav uk-dropdown-nav">
                     <li><a href="/exchange/SHIB/MNT">SHIB/MNT</a></li>
                  </ul>
               </div>
            </div>
         </td>
      </tr>
   </tbody>
</table>
      
            </div>

         </div>
  
      </div>
   </div>
</x-app-layout>