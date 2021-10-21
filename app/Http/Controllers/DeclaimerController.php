<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DeclaimerController extends Controller
{
    public function index()
    {
        // Check if client has submitted details else return to upload details page

        if(Details::where('user_id', Auth::id())->exists()) {
            return view('declaimer.declaimer');
        } 
        return  redirect(route('upload-details'));
    }
}
