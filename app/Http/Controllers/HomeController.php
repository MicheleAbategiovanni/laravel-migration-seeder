<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use DateTime;

class HomeController extends Controller
{
    function index()
    {

        $trains = Train::where("departure_day", "2023-01-24")->get();

        return view("index", compact('trains'));
    }
}
