<div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
            <div class="card-stats">
                <div class="card-stats-title">Order Statistics - 
                <div class="dropdown d-inline">
                    <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                    <li class="dropdown-title">Select Month</li>
                    <li><a href="#" class="dropdown-item">January</a></li>
                    <li><a href="#" class="dropdown-item">February</a></li>
                    <li><a href="#" class="dropdown-item">March</a></li>
                    <li><a href="#" class="dropdown-item">April</a></li>
                    <li><a href="#" class="dropdown-item">May</a></li>
                    <li><a href="#" class="dropdown-item">June</a></li>
                    <li><a href="#" class="dropdown-item">July</a></li>
                    <li><a href="#" class="dropdown-item active">August</a></li>
                    <li><a href="#" class="dropdown-item">September</a></li>
                    <li><a href="#" class="dropdown-item">October</a></li>
                    <li><a href="#" class="dropdown-item">November</a></li>
                    <li><a href="#" class="dropdown-item">December</a></li>
                    </ul>
                </div>
                </div>
                <div class="card-stats-items">
                <div class="card-stats-item">
                    <div class="card-stats-item-count">24</div>
                    <div class="card-stats-item-label">Pending</div>
                </div>
                <div class="card-stats-item">
                    <div class="card-stats-item-count">12</div>
                    <div class="card-stats-item-label">Shipping</div>
                </div>
                <div class="card-stats-item">
                    <div class="card-stats-item-count">23</div>
                    <div class="card-stats-item-label">Completed</div>
                </div>
                </div>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Orders</h4>
                </div>
                <div class="card-body">
                59
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
            <div class="card-chart">
                <canvas id="balance-chart" height="80"></canvas>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Үлдэгдэл</h4>
                </div>
                <div class="card-body">
                $187,13
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
            <div class="card-chart">
                <canvas id="sales-chart" height="80"></canvas>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Захиалга</h4>
                </div>
                <div class="card-body">
                4,732
                </div>
            </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h4>Хэтэвч</h4>
               
            </div>

            <div class="card-body p-0">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                    <a href="{{url('wallet')}}" class="nav-link render active" aria-current="page" urls="{{url('wallet')}}">Үлдэгдэл</a>
                    </li>
                  
                    <li class="nav-item">
                    <a href="{{url('wallet/history')}}" class="nav-link render" urls="{{url('wallet/history')}}">Түүх</a>
                    </li>
                </ul>

                <div class="table-responsive table-invoice">
                <table class="table table-striped">
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="tw-primary-color" style="opacity: 0;"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="tw-primary-color" style="opacity: 0;"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="tw-primary-color" style="opacity: 0;"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="tw-primary-color" style="opacity: 0;"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="tw-primary-color" style="opacity: 0;"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="tw-primary-color" style="opacity: 0;"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
                                <div class="pointer"></i>Орлого</div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="pointer"><i class="remixicon-arrow-right-down-fill tw-text-red tw-mr-8 tw-fs-16"></i>Зарлага</div>
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
</div>