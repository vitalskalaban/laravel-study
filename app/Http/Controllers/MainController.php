<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateReportRequest;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
