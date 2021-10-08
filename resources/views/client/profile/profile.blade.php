@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for client profile begins with "cp" meaning 'client-profile' --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>Dashboard</h3>
        </div>
        <div class="cp-profile-container">
           <div class="cp-prfile-image-container">
               profile image
            </div> 
            <div class="cp-profile-details-container">
                profile details
            </div>
        </div>

    </div>
@endsection