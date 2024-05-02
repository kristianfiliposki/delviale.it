<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    
    {
        $clienti=Client::all();
        return view('admin.dashboard',compact("clienti"));
    }
}
