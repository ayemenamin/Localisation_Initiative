<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function home() {
        return view('admin.home.index');
    }
}
