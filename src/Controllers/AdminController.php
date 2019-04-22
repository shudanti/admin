<?php

namespace Shudanti\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('shudanti.admin.admin');
    }
}
