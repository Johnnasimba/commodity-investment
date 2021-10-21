<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get('/client/profile'
        $details = Details::where('user_id', Auth::user()->id)->get();
        return view('client.profile.profile', ['details'=> $details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.profile.upload-details.upload-details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = $this->validate($request, [
            'date-of-birth' => 'required|min:2|max:20',
            'address' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'first-phone-number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:30',
            'other-phone-number' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:30',
            'second-email' => 'email',
            'occupation' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
         ]);

         if($validator) {
            $detail = new Details();
            $detail->user_id = request('user_id');
            $detail->date_of_birth = request('date-of-birth');
            $detail->gander = request('gander');
            $detail->country = request('country');
            $detail->address = request('address');
            $detail->first_phone_number = request('first-phone-number');
            $detail->second_phone_number = request('other-phone-number');
            $detail->second_email = request('second-email');
            $detail->annual_income = request('annual-income');
            $detail->source_of_funds = request('source-of-income');
            $detail->occupation = request('occupation');

            $detail->save();            
         }

         return redirect(route("declaimer"));       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function show(Details $details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit(Details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Details   $details 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Details $details )
    {
        //
    }
}
