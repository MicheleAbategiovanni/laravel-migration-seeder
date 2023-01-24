<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use DateTime;

class HomeController extends Controller
{
    function index()
    {

        $trains = Train::whereDate('departure_day', date('Y-m-d'))->get();

        return view("index", compact('trains'));
    }
}
