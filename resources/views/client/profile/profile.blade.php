@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for client profile begins with "cp" meaning 'client-profile' --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>Dashboard</h3>
        </div>
        <div class="cp-profile-container">
           <div class="cp-profile-image-container">
                {{-- This will be conditionally renderd. If profile is available, an image will be displayed else this icon --}}
                <div class="image-and-edit">
                    <i class="fas fa-user-circle"></i>    
                    <div class="edit-container">
                        <i class="fas fa-edit"></i>
                        <a href="/edit">Edit </a>
                    </div>
                </div>
                <h2 class="cp-client-name">John Nasimba</h2>
            </div> 
            <div class="cp-profile-details-container">
               <h4>PERSONAL DETAILS</h4>
               <ul class="personal-details-container">
                   <li class="details-card">
                       <p class="key">Customer ID</p>
                       <p class="value">1701001</p>
                   </li>
               </ul>
            </div>
        </div>

    </div>
@endsection