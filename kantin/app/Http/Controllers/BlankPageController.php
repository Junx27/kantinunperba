<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankPageController extends Controller
{
    public function blankMenuUser()
    {
        return view('user/blankpagemenu');
    }
    public function blankMenuAdmin()
    {
        return view('admin/blankpagemenu');
    }
    public function blankUser()
    {
        return view('admin/blankpagekonsumen');
    }
}
