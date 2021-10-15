@extends('layouts.mainLayout')
@section('content')
    @include('components.header.guest-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    {{-- Most of the css classes are driven from profile page. If you ever run into a problem regarding css try changing class names in both this blade as well as its corresponding sass file --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>Page not found</h3>
        </div>
        <div class="cp-profile-container">
            <div class="cp-unverified-account-container">
                <span class="iconify" data-icon="iconoir:file-not-found"></span>
                <div class="description">
                    <p>We can't find the page you are looking for. </p>
                    <p>Please check the link and try again </p>                   
                </div>
             </div>
          
        </div>
   </div>
@endsection