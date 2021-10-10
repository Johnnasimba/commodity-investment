@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3>Dashboard</h3>
        </div>
        <div class="cp-profile-container">
            <div class="cp-profile-details-container">
                <h4 class="cp-details-title">Edit details</h4>
                <form action="details" method="POST">
                    <div class="form-group">
                        <label for="secondary-number" >Secondary Phone Number</label>
                        <input type="number" id="secondary-number">
                    </div>
                    <div class="form-group">
                        <label for="secondary-email" >Secondary Email</label>
                        <input type="number" id="secondary-email">
                    </div>
                    <div class="form-group">
                        <label for="secondary-number" >Estimated Annual Income</label>
                        <select name="annual-income" id="annual-income">
                            <option value="25000">Less than R25, 000 </option>
                            <option value="25000-100000">Between R25,000 - R100,000</option>
                            <option value="100000-500000">Between R100,000-R500,000</option>
                            <option value="500000+">Above R500,000</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="secondary-number" >Secondary Phone Number</label>
                        <input type="number" id="secondary-number">
                    </div>
                    <div class="form-group">
                        <label for="secondary-number" >Secondary Phone Number</label>
                        <input type="number" id="secondary-number">
                    </div>
                   
                </form>
             </div>
          
        </div>

    </div>
@endsection