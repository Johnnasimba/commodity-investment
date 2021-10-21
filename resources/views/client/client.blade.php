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
                <a href="{{ url('client/profile/unverified-account') }}"> DEPOSIT </a>
            </div>

        </div>
        <div class="clp-pricing-container">
            <div class="clp-pricing">           
                <div class="clp-price-card">
                    <h3 class="price"> 14.86 </h3>
                    <p class="price-name"> USD/ZAR </p>
                </div>

                <div class="clp-price-card">
                    <h3 class="price"> 0.00  </h3>
                    <p class="price-name">AVAILABLE BALANCE  </p>
                </div>
                <div class="clp-price-card">
                    <h3 class="price"> 201.05 </h3>
                    <p class="price-name">POOL UNITS  </p>
                </div>
                
                <div class="clp-price-card">
                    <h3 class="price"> R0.00 </h3>
                    <p class="price-name"> PROFITS  </p>
                </div>
                <div class="clp-price-card">
                    <h3 class="price"> 0.0%  </h3>
                    <p class="price-name"> PORTFOLIO GROWTH  </p>
                </div>            
            </div>
        </div>
        <div class="clp-price-chart-and-side-nav">
           <!-- TradingView Widget BEGIN -->
           @include('components.price-chat.price-chat')
            <!-- TradingView Widget END -->

            <div class="clp-side-nav">
                <h3 class="clp-side-nav-title">GOLD AND SILVER PRICES</h3>
                <div class="clp-gold-and-silver-price-container">
                    <div class="clp-gold-price-container">
                        <h4 class="clp-gold-price">R25,081.73/g</h4>
                        <p>GOLD(XAU/ZAR)</p>
                        <a href="{{ url('client/no-funds') }}">BUY</a>

                    </div>
                    <div class="clp-silver-price-container">
                        <h4>R330.73/g</h4>
                        <p>SILVER(XAG/ZAR)</p>
                        <a href="{{ url('client/no-funds') }}">BUY</a>
                    </div>
                </div>
                {{-- Account status moved to top --}}
                {{-- <h3 class="clp-client-status">YOUR PERSONAL STATUS</h3>
                <ul class="clp-client-status-container">
                    <li class="clp-status">
                        <h4>R0.00</h4>
                        <h6>AVAILABLE FUNDS</h6>
                    </li>
                    <li class="clp-status">
                        <h4>201.05</h4>
                        <h6>POOL UNITS</h6>
                    </li>
                    <li class="clp-status">
                        <h4>R1990.00</h4>
                        <h6>PROFITS</h6>
                    </li>
                    <li class="clp-status">
                        <h4>98.86%</h4>
                        <h6>PORTFOLIO GROWTH</h6>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
    
@endsection