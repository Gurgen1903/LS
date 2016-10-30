<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Services\HomeServices;
use App\Http\Services\AdminServices;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminServices $adminServices)
    {
        $data = $adminServices->getAllImgForSlider();
        return view('home',compact('data'));
    }
}
