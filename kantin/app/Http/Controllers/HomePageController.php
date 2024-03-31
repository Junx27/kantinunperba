<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function HomeAdmin()
    {
        return redirect('admin/dashboard');
    }
    public function HomeUser()
    {
        return redirect('user/daftarmenu');
    }
    public function LandingPage()
    {
        return view('landingpage');
    }
}
