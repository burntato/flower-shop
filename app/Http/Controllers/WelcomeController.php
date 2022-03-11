<?php

namespace App\Http\Controllers;

use App\Models\Featured;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $featured = Featured::all();
        return view('welcome.home', compact('featured'));
    }
}
