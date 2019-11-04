<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controllers
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', array('cars' => $cars));
    }
    
    public function create()
    {
        return view('article.create');

    }

    public function store(Request $request)
    {
        Event::create(['tilte' => $request->title, 'description' => $request->description]);
        return redirect (route('home'));
    }

    public function show($id)
    {  
        $car = Car::find($id);
        return view('cars.show', array('car' => $car));
    }
}

