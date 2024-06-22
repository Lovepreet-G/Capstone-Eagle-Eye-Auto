<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Reviews;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get();
        $reviews = reviews::take(5)->get();

        return view('homepage', compact('services','reviews'));
    }
}
