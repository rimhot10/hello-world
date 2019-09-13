<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function myCaptcha()
    {
        return view('myCaptcha');
    }

    public function myCaptchaPost(Request $request)
    {

        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'],
        ['captcha.captcha'=>'invalid captcha code.']);
        dd("Mataku a :) .");
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    } 
}
