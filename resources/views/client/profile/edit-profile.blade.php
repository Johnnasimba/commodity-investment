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
                <div class="image-and-edit">
                    <i class="fas fa-user-circle"></i>    
                </div>
                <form action="edit">
                    <input type="file" accept=".jpg,.jpeg,.png" placeholder="Select image">
                    <button type="submit">Upload image</button>
                </form>
            </div> 
          
        </div>

    </div>
@endsection