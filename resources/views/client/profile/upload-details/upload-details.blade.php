@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- classes are inherited from edit details --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3 align=center>Tell us more about yourself</h3>
        </div>
        <div class="cp-profile-container">
            <div class="cp-edit-details-container">
                {{-- <h4 class="cp-edit-title">Tell us more about your self</h4> --}}
                <form action="{{ route('details') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="label-with-span">
                            <label for="date-of-birth" >Date of birth</label>
                            <span style="color: red;">*</span> 
                        </div>
                        <div class='input-group date' id='datetimepicker'>
                            <input type='text' class="form-control" name="date-of-birth" />
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                       
                    </div>
                    @if ($errors->has('date-of-birth'))
                            <p class="text-danger">{{ $errors->first('date-of-birth') }} the data is invalide</p>
                            @endif
                    <div class="form-group">
                        <label for="gander" >Gander</label>
                        <div class="label-with-span">
                            <select name="gander" id="gander" >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        @include('components.countries.countries')
                    </div>
                    <div class="form-group">
                        <div class="label-with-span">
                            <label for="address" >Address</label>
                            <span style="color: red !important;">*</span> 
                        </div>
                        <div class="input-with-span">
                            <input type="text" id="address" name="address" required>
                            @if ($errors->has('address'))
                                <p class="text-danger">{{ $errors->first('address') }} the data is invalide</p>
                            @endif
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="label-with-span">
                            <label for="first_phone_number" >phone number</label>
                            <span style="color: red !important;">*</span>           
                        </div>
                        <div class="input-with-span">
                            <input type="number" id="first_phone_number" name="first-phone-number" required>
                            @if ($errors->has('first-phone-number'))
                                <p class="text-danger">{{ $errors->first('first-phone-number') }}</p>
                            @endif                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="second_phone_number" >Other phone number</label>
                        <div class="input-with-span">                            
                            <input type="text" id="second_phone_number" name="other-phone-number">
                            @if ($errors->has('other-phone-number'))
                                <p class="text-danger">{{ $errors->first('other-phone-number') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label-with-span">
                            <label for="second_email" >Recovery email address</label>
                            <span style="color: red !important;">*</span> 
                        </div>
                        <div class="input-with-span">                            
                            <input type="email" id="second_email" name="second-email" required>
                            @if ($errors->has('second-email'))
                                <p class="text-danger">{{ $errors->first('second-email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="display: none !important">
                        <div class="label-with-span">
                            <label for="user-id" >user id</label>
                            <span style="color: red !important;">*</span> 
                        </div>
                        <input number="email" id="user_id" name="user_id" value="{{Auth::id()}}" required>
                    </div>
                    <div class="form-group">
                        <label for="annual-income" >Estimated Annual Income</label>
                        <div class="input-with-span">   
                            <select name="annual-income" id="annual-income" >
                                <option value="Less than R25, 000">Less than R25, 000 </option>
                                <option value="Between R25,000 - R100,000">Between R25,000 - R100,000</option>
                                <option value="Between R100,000-R500,000">Between R100,000-R500,000</option>
                                <option value="Above R500,000">Above R500,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="income" >Source of income</label>
                        <select name="source-of-income" id="annual-income">
                            <option value="Wages/salary"> Wages/salaries </option>
                            <option value="Self employment income">Self-employment income</option>
                            <option value="Governement">Government transfer payments</option>
                            <option value="Investment">Investment income and other income</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ocupation" >Occupation</label>
                        <div class="input-with-span">                            
                            <input type="text" id="occupation" name="occupation">
                            @if ($errors->has('occupation'))
                                <p class="text-danger">{{ $errors->first('occupation') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit">
                    </div>
                   
                </form>
             </div>
          
        </div>

    </div>
@endsection