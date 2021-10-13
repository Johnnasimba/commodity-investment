@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>History</h3>
        </div>
        <div class="cp-profile-container">
            <div class="cp-edit-details-container">
                <h4 class="cp-edit-title">Your history will appear here</h4>
        
             </div>
          
        </div>

    </div>
@endsection