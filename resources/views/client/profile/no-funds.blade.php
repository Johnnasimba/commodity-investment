@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>Buy Gold</h3>
        </div>
        <div class="cp-profile-container">
            <div class="cp-unverified-account-container">
                <span class="iconify" data-icon="fa-solid:history"></span>
                <div class="description">
                    <p>You don't have any money in your account. </p>
                    <p>Fund your account to start Investing </p>
                   
                    <a href="/client/profile/submit-docs" class="fund-account"> Submit documents</a>
                </div>
             </div>
          
        </div>
   </div>
@endsection