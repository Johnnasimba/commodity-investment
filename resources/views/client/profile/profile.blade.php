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
               <h4 class="cp-details-title">PERSONAL DETAILS</h4>
               <ul class="personal-details-container">
                   <li class="details-card">
                       <p class="key">Customer ID:</p>
                       <p class="value">1701001</p>
                   </li>
                   <li class="details-card">
                       <p class="key">First Name:</p>
                       <p class="value">John</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Last Name:</p>
                       <p class="value">Nasimba</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Date of Birth:</p>
                       <p class="value">1997-08-02</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Gander:</p>
                       <p class="value">Male</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Country/Region:</p>
                       <p class="value">South Africa</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Address:</p>
                       <p class="value">7456 m Mkwayi, Hout bay, Cape Town</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Primary Phone Number:</p>
                       <p class="value">27-80387591</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Secondary Phone Number:</p>
                       <p class="value">27-80387591</p>
                       <a href="/edit">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Primary Email:</p>
                       <p class="value">nasimba4john@gmail.com</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Secondary Email:</p>
                       <p class="value">nasimba4john@gmail.com</p>
                       <a href="/edit">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Estimated Annual Income:</p>
                       <p class="value">Less than 50,000</p>
                       <a href="/edit">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Source of Funds:</p>
                       <p class="value">Savings</p>
                       <a href="/edit">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Occupation:</p>
                       <p class="value">Computer Programmer</p>
                       <a href="/edit">Edit </a>
                   </li>
               </ul>
            </div>
        </div>

    </div>
@endsection