<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where("departure_time", ">", now()->startOfDay()) -> orderBy("departure_time", "asc") -> get();
        return view("index", compact('trains'));
    }
}
