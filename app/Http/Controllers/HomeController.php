<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $categories = Category::withCount('events')->get();
        $fiveLastEvents = Event::latest()->take(5)->get();
        return view('index', compact('categories', 'fiveLastEvents'));
    }
}