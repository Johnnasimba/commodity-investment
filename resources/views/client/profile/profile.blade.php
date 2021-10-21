@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for client profile begins with "cp" meaning 'client-profile' --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>Profile</h3>
        </div>
        <div class="cp-profile-container">
           <div class="cp-profile-image-container">
                {{-- This will be conditionally renderd. If profile is available, an image will be displayed else this icon --}}
                <div class="image-and-edit">
                    <i class="fas fa-user-circle"></i>    
                    <div class="edit-container">
                        <i class="fas fa-edit"></i>
                        <a href="/client/profile/edit-profile">Edit </a>
                    </div>
                </div>
                <h2 class="cp-client-name">{{ Auth::user()->name }}</h2>
            </div> 
            <div class="cp-profile-details-container">
               <h4 class="cp-details-title">PERSONAL DETAILS</h4>
               
               @foreach ($details as $item)
               <ul class="personal-details-container">
                   <li class="details-card">
                       <p class="key">Customer ID:</p>
                       <p class="value">170100{{Auth::id()}}</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Name</p>
                       <p class="value"> {{ Auth::user()->name }} </p>
                   </li>
                   <li class="details-card">
                       <p class="key">Date of Birth:</p>
                       <p class="value">1{{ $item->date_of_birth}}</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Gander:</p>
                       <p class="value">{{ $item->gander}}</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Country/Region:</p>
                       <p class="value">{{ $item->country}}</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Address:</p>
                       <p class="value">7{{ $item->address}}</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Primary Phone Number:</p>
                       <p class="value">{{ $item->first_phone_number}}</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Secondary Phone Number:</p>
                       <p class="value">{{ $item->second_phone_number}}</p>
                       <a href="/client/profile/edit-details">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Primary Email:</p>
                       <p class="value"> Registed email here</p>
                   </li>
                   <li class="details-card">
                       <p class="key">Secondary Email:</p>
                       <p class="value">{{ $item->second_email}}</p>
                       <a href="/client/profile/edit-details">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Estimated Annual Income:</p>
                       <p class="value">{{ $item->annual_income}}</p>
                       <a href="/client/profile/edit-details">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Source of Funds:</p>
                       <p class="value">{{ $item->source_of_funds}}</p>
                       <a href="/client/profile/edit-details">Edit </a>
                   </li>
                   <li class="details-card">
                       <p class="key">Occupation:</p>
                       <p class="value">{{ $item->occupation}}</p>
                       <a href="/client/profile/edit-details">Edit </a>
                   </li>
               </ul>
               @endforeach
            </div>
        </div>

    </div>
@endsection