<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $users = User::all(); // الحصول على جميع المستخدمين
        return view('admin.index', ['users' => $users]);
    }

    public function home() {
        return view('admin.home.index');
    }
    
}
