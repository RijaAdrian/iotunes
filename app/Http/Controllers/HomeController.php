<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function country() {
        return Country::all();
    }

    public function upload(Request $request,$hash) {
        $this->middleware('auth');
        //Verifier que le hash correspond bien à l'utilisateur actuel
        //
        return response()->json($request->all());
    }

    public function isLoggedIn() {
        return Auth::check() ? response()->json(Auth::guard()->user()->toArray()) : response()->json([]) ;
    }
}
