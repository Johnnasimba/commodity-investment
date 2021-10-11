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
                <span class="iconify" data-icon="ic:baseline-sms-failed"></span>
                <div class="description">
                    <p>Your account is not verified. Please submit the following documents to get your account verified and start investing</p>
                    <ol>
                        <li>ID/Passport</li>
                        <li>Proof of address</li>
                        <li>Bank statement</li>
                    </ol>
                    <a href="http://amaracpaital.com" class="learn-more" target="_blank" rel="noopener noreferrer">learn more</a>
                    <a href="/client/profile/submit-docs"> Submit documents</a>
                </div>
             </div>
          
        </div>
   </div>
@endsection