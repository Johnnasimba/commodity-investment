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
               <div class="image-and-name-container">
                    <h1>Profile image</h1>
                    <h6>John Nasimba</h6>
               </div>
               <div class="edit-container">
                    <i class="fas fa-pen"></i>
                    <a href="/edit">Edit profile picture</a>
               </div>
            </div> 
            <div class="cp-profile-details-container">
                profile details
            </div>
        </div>

    </div>
@endsection