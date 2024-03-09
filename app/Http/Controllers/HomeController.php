<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $usertype = Auth::user()->usertype;

        if ($usertype === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.profile');
        }
    }
}
