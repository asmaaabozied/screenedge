<?php

namespace App\Http\Controllers\Dashboard;



// use App\Supplier;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    public function index()
    {

   return view('dashboard.welcome');

    }
}//end of controller
