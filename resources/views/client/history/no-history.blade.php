@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    {{-- Most of the css classes are driven from profile page. If you ever run into a problem regarding css try changing class names in both this blade as well as its corresponding sass file --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>History</h3>
        </div>
        <div class="cp-profile-container">
            <div class="cp-unverified-account-container">
                <span class="iconify" data-icon="fa-solid:history"></span>
                <div class="description">
                    <p>You don't have any history. </p>
                    <p>Fund your account to start Investing </p>
                   
                    <a href="/client/deposit" class="fund-account"> Fund my account</a>
                </div>
             </div>
          
        </div>
   </div>
@endsection