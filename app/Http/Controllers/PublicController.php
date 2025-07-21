<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class PublicController extends Controller
{
    public function index(Request $request) {
        if(isset($request->logo_type) && $request->logo_type == 'subtext') {
            View::share('LogoType', 'subtext');
        } else {
            View::share('LogoType', 'original');
        }
        View::share('Title', 'SugaCoded, LLC');
        return view('public.index');
    }
}
