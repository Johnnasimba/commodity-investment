@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All css on here begins with "clp" which stands for "Client Landing Page". All this is done to avoid css conflicts--}}
    <div class="clp-wrapper">
        <div class="clp-page-name-container">
            <div class="clp-name-container">
                <h3>Dashboard</h3>
            </div>
            <div class="clp-main-deposit-button">
                <a href="http://">DEPOSIT</a>
            </div>

        </div>
        <div class="clp-pricing-container">
            <div class="clp-pricing">           
                <div class="clp-price-card">
                    <h3 class="price"> 14.86 </h3>
                    <p class="price-name"> USD/ZAR </p>
                </div>

                <div class="clp-price-card">
                    <h3 class="price"> 0.0092  </h3>
                    <p class="price-name"> PRICE ADJUSTMENT FACTOR  </p>
                </div>
                <div class="clp-price-card">
                    <h3 class="price"> 0.93004  </h3>
                    <p class="price-name"> EXCHANGE RATE ADJUSTMENT FACTOR  </p>
                </div>
                
                <div class="clp-price-card">
                    <h3 class="price"> 2%  </h3>
                    <p class="price-name"> REFINERY MARGIN  </p>
                </div>
                <div class="clp-price-card">
                    <h3 class="price"> 15%  </h3>
                    <p class="price-name"> AMARA CAPITAL MARGIN  </p>
                </div>            
            </div>
        </div>
        <div class="clp-price-chart-and-side-nav">
           <!-- TradingView Widget BEGIN -->
            <div id="tradingview_202c3"></div>
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FX_IDC-XAGZAR/" rel="noopener" target="_blank"><span class="blue-text">XAGZAR Chart</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget(
                            {
                            "width": 980,
                            "height": 610,
                            "symbol": "FX_IDC:XAGZAR",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "container_id": "tradingview_5b282"
                        }
                    );
                    </script>
                </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
    
@endsection